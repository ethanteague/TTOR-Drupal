/*
* Table of Contents Plugin
*
*/
(function ($, Drupal, drupalSettings, CKEDITOR) {
  'use strict';

  const widgetName = 'toc';

  CKEDITOR.plugins.add(widgetName, {
    icons: widgetName,
    requires: 'menu',
    icons: widgetName,
    hidpi: true,
    onLoad: function() {
      CKEDITOR.addCss('.cke_editable .njc-toc, .cke_editable .njc-no-toc { border: 1px dotted #304f6b; text-decoration: none; }' );
      CKEDITOR.addCss(".cke_editable .njc-toc:before { font-family: Font Awesome\\ 5 Free;content: '\\f02d';font-weight: 900;color:#000;font-style: normal;margin:0px 5px 0px 0px; }" );
		},
    init: function(editor) {

      editor.addCommand('appendTOC', {
        exec: function(editor) {
          var selectedContent = editor.getSelection().getStartElement();

          // Insert TOC span for everything except H2 (automatically included), and avoid adding multiples by checking name.
          var tocElement = selectedContent.findOne('.njc-toc');
          if((!tocElement && !selectedContent.hasClass('njc-toc') || selectedContent.getName() == 'p') && selectedContent.getName() != 'h2') {
            editor.insertHtml('<span class="njc-toc">' + editor.getSelection().getSelectedText() + '</span>');
          }

          // H2 is automatically included, allow ability to remove blacklist
          if(selectedContent.hasClass('njc-no-toc')) {
            selectedContent.removeClass('njc-no-toc');
          }
        }
      });

      editor.addCommand('removeTOC', {
        exec: function(editor) {
          var selectedContent = editor.getSelection().getStartElement();
          var selectedException = getSelectedTag(editor);
          if(selectedContent.hasClass('njc-toc')) {
            selectedContent.remove();
            editor.insertHtml(selectedContent.$.innerHTML);
          } else if(selectedException.getName() == 'h2') {
            selectedException.addClass('njc-no-toc');
          }
        }
      });

      editor.ui.addButton('toc-add', {
				label: 'Add to Summary Quick Links',
        toolbar: 'insert',
        group: widgetName,
				command: 'appendTOC',
        icon: this.path + 'images/add.png'
      });

      editor.ui.addButton('toc-remove', {
				label: 'Remove from Summary Quick Links',
        toolbar: 'insert',
        group: widgetName,
				command: 'removeTOC',
        icon: this.path + 'images/remove.png'
      });

      editor.addMenuGroup(widgetName);

      editor.ui.add(widgetName, CKEDITOR.UI_MENUBUTTON, {
        label: 'Table of Contents',
        icon : this.path + 'images/icon.png',
        onMenu() {
          const widgets = getWidgetsInGroup(editor);

          const returnObj = {}
          widgets.forEach(widget => {
            const command = editor.getMenuItem(widget).command;
            returnObj[widget] = editor.getCommand(command).state
          })

          return returnObj;
        }
      });
    },
    afterInit(editor) {
      const widgets = getWidgetsInGroup(editor);

      const items = {};
      widgets.forEach(widget => {
        const button = editor.ui.items[widget];
        if (button) {
          items[widget] = {
            group: widgetName,
            label: button.label,
            command: button.command,
            icon: button.icon
          }
        }
      })

      editor.addMenuItems(items);
      editor.config.removeButtons = widgets.join(',')
    }
  });

  function getWidgetsInGroup(editor) {
    const group = editor.config.toolbar.find(group => {
      if (group.items) {
        return group.items.find(key => key === widgetName);
      }
      return false;
    })

    return group.items.filter(item => item !== widgetName);
  }

  /**
   * Check and get existing H2.
   *
   * @param {CKEDITOR.editor} editor
   */
  function getSelectedTag(editor) {
		var selection = editor.getSelection();
		var selectedElement = selection.getSelectedElement();
		var range = selection.getRanges(true)[0];

    if (range) {
			range.shrink(CKEDITOR.SHRINK_TEXT);
      return editor.elementPath(range.getCommonAncestor()).contains('h2', 1);
    }
		return selectedElement;
	}

})(jQuery, Drupal, drupalSettings, CKEDITOR);
