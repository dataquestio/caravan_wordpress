var output = "<iframe name=\"dq_editor\" width=\"100%\" height=\"350\" >\n  <pre id=\"initialization-code\">\n  </pre>\n  <pre id=\"code\">\n  </pre>\n  <pre id=\"hint\">\n    # markdown here\n  </pre>\n  <pre id=\"answer-code\" check-vars=\"\" >\n  </pre>\n</iframe>\n"; // eslint-disable-line

jQuery (function ($) { // eslint-disable-line
  $(document).ready(function () {
    $('#insert-dataquest-exercise-button').on('click', function (e) {
      e.preventDefault()
      window.send_to_editor(output)
    })
  })
})
