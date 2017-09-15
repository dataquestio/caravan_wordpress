jQuery (function ($) { // eslint-disable-line
  $(document).ready(function () {
    var iframes = document.getElementsByName('dq_editor')
    iframes.forEach(function (element) {
    if (!element.hasAttribute('src')) element.setAttribute('src', '//dqeditor.dataquest.io/')
      element.style.border = 'none'
    })
  })
})
