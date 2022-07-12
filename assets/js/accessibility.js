(function ($) {
  const mainMenu = $('#main-menu')
  const button = mainMenu.find('.accessibility-button')
  const menuItems = mainMenu.find('#accessibility-menu');

  (function () {
    // 在按钮被隐藏的时候提前退出
    if (!button.length) {
      return
    }

    // 为属性添加初始值
    button.attr('aria-expanded', 'false')

    // 在点击时触发事件
    button.on('click.binzhengstudio', function () {
      menuItems.toggleClass('button-on')

      $(this).attr('aria-expanded', menuItems.hasClass('button-on'))
    })
  })();
})(jQuery)