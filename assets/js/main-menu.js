/* global screenReaderText */

(function ($) {
  const mainMenu = $('#main-menu')
  const menuButton = mainMenu.find('.top-menu-button')
  const menuItemsContainer = mainMenu.find('.menu-items');

  (function () {
    // 在按钮被隐藏的时候提前退出
    if (!menuButton.length) {
      return
    }

    // 为属性添加初始值
    menuButton.attr('aria-expanded', 'false')

    // 在点击时触发事件
    menuButton.on('click.binzhengstudio', function () {
      menuItemsContainer.fadeToggle();

      $(this).attr('aria-expanded', menuButton.attr('aria-expanded') === 'false' ? 'true' : 'false')
    })
  })();

  (function initMainNavigation (container = menuItemsContainer) {
    // Add dropdown toggle that displays child menu items.
    const dropdownButton = $('<button />', {
      'class': 'dropdown-button',
      'aria-expanded': false
    })
    // .append($('<span />', {
    // 'class': 'screen-reader-text',
    // text: screenReaderText.expand
    // }))

    container.find('.menu-item-has-children > a').after(dropdownButton)

    // Toggle buttons and submenu items with active children menu items.
    // container.find('.current-menu-ancestor > button').addClass('button-on')
    // container.find('.current-menu-ancestor > .sub-menu').addClass('button-on')

    // Add menu items with submenus to aria-haspopup="true".
    container.find('.menu-item-has-children').attr('aria-haspopup', 'true')

    container.find('.dropdown-button').on('click.binzhengstudio', function (e) {
      const button = $(this);
      const menu = button.next('.children, .sub-menu');
      // const screenReaderSpan = _this.find('.screen-reader-text');

      e.preventDefault();
      button.toggleClass('button-on');
      menu.fadeToggle();
      button.attr('aria-expanded', button.attr('aria-expanded') === 'false' ? 'true' : 'false');
      // screenReaderSpan.text(screenReaderSpan.text() === screenReaderText.expand ? screenReaderText.collapse : screenReaderText.expand);
    })
  })()
})(jQuery)