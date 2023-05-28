//<!--

var sb_websocket = null;
var sb_wsopen = false;
var sb_wsClosing = false;
var sb_wsStatus = -1;
var sb_wsEventID = "5ebeed36-cf78-424a-be18-a69f8e394999";
var sb_wshost = "://textstaging.speche.com/ws.aspx?Bytes=0&EventID=";
var sb_wsDemos = "25E9D359-69CB-4A30-A103-D02E0B986042,5EBEED36-CF78-424A-BE18-A69F8E394999";
var sb_wsIsDemo = false;
var sb_wsData_Received = false;
var sb_wsResetcount = 0;
var sb_wsException = '';
var sb_wsCloseCode = '';
var sb_wsTryAgain = true;

function sb_WebSocket_Open()
{
	try
	{
		sb_wsClosing=false;
		var ws_Protocol = "ws";
		if (window.location.protocol === "https:")
			ws_Protocol+="s";
	  if (sb_wsDemos.indexOf(sb_wsEventID.toUpperCase()) > -1)
	    sb_wsIsDemo = true;
		//alert(ws_Protocol + sb_wshost + sb_wsEventID);
	  sb_websocket = new WebSocket(ws_Protocol + sb_wshost + sb_wsEventID);	  
	  sb_websocket.onopen = function(evt) { sb_onOpen(evt); };
	  sb_websocket.onclose = function(evt) { sb_onClose(evt); };
	  sb_websocket.onmessage = function(evt) { sb_onMessage(evt); };
	  sb_websocket.onerror = function(evt) { sb_onError(evt); };
	  sb_wsStatus = sb_websocket.readyState;
  }
  catch(exception)
  {
  	sb_wsException=exception;
  	//sb_Receive("WS_CONNECTION_CLOSED",true,false);
  	sb_Receive('WS_EXCEPTION',true,false);  	
  	//sb_WebSocket_Reset();
  }
}

function sb_getWSStatus()
{
	return sb_wsStatus;
}

function sb_WebSocket_Check()
{
	if (sb_websocket!=null) {
		try {
			sb_websocket.send('');
		}
		catch(exception)
		{
			sb_wsopen = false;
	    sb_wsStatus = 3;
      sb_Receive("WS_CONNECTION_CLOSED",true,false);
		}
  }
  else {
  	sb_wsopen = false;
	  sb_wsStatus = 3;
    sb_Receive("WS_CONNECTION_CLOSED",true,false);
  }
}

function sb_WebSocket_Reset()
{
	if (sb_wsTryAgain)
	{
		sb_wsTryAgain=false;
	  //sb_wsResetcount++;
	  sb_WebSocket_Open();
	}
	else
	  sb_Receive("WS_STOPPING",true,false);
}

function sb_WebSocket_Close()
{
	sb_wsopen = false;
	sb_wsStatus = 3;
	sb_wsCloseCode = "WS_USER";
	try {
	  if (sb_websocket != null)
	  {
		  if (sb_websocket.readyState < 2)
		  {
			  sb_websocket.close();
			  //if (sb_wsopen)
			  //{
				//  sb_Receive("WS_CONNECTION_CLOSED",true,false);
			  //}
		  }
	  }
	  sb_websocket = null;
	}
	catch(exception)
	{
	  sb_websocket = null;
	}	
}

function sb_onOpen(evt)
{
	sb_wsopen = true;
	sb_wsStatus = sb_websocket.readyState;
	sb_wsTryAgain = true;
	sb_Receive("WS_CONNECTION_OPEN",true,false);
}

function sb_onClose(evt)
{
	sb_wsStatus = 3;
	sb_wsCloseCode = evt.code;
	if (sb_wsopen)
		sb_wsopen = false;		
	sb_Receive("WS_CONNECTION_CLOSED",true,false);
	if (!sb_wsClosing) {
		if (sb_wsTryAgain) {
			sb_WebSocket_Reset();
	  }
  }	  
}

function sb_onMessage(evt)
{
	sb_wsopen = true;
	sb_wsStatus = sb_websocket.readyState;
	sb_wsData_Received = true;	
	if (evt.data instanceof Blob) 
	{
    var image = new Image();		      
    image.src = URL.createObjectURL(evt.data);
    sb_Receive(image,false,true);
  }
  else 
  {
    sb_Receive(evt.data,true,true);
    //Need to remedy the need for this check...
    //: The requested Event had ended.
    if (evt.data.indexOf("CONNECTION CLOSING")>-1)
    {
    	sb_wsClosing = true;
    }
	}
}

function sb_onError(evt)
{
	sb_wsStatus = 3;
	if (sb_wsIsDemo)
	{
		if (sb_wsData_Received)
		  sb_wsClosing = true;
	}
	if (sb_wsClosing)
	{
		if (sb_wsopen)
		{
			sb_wsopen = false;
			sb_Receive("WS_CONNECTION_CLOSED",true,false);
		}
	}
	else
	{		
		sb_wsopen = false;
		sb_wsStatus = sb_websocket.readyState;
		sb_Receive("WS_ERROR",true,false);
	}
}

// -->