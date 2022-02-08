(function ($) {
  var mainMenu = $('#main-menu')
  var menuButton = mainMenu.find('.top-menu-button')
  var menuItemsContainer = mainMenu.find('.menu-items');

  (function () {
    // 在按钮被隐藏的时候提前退出
    if (!menuButton.length) {
      return
    }

    // 为属性添加初始值
    menuButton.attr('aria-expanded', 'false')

    // 在点击时触发事件
    menuButton.on('click.bzstudio', function () {
      menuItemsContainer.toggleClass('button-on')

      $(this).attr('aria-expanded', menuItemsContainer.hasClass('button-on'))
    })
  })()
})(jQuery)