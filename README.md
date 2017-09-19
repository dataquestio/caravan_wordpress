# Dataquest Interactive Code System Wordpress Plugin

## Installation Instructions

### Admin Dashboard

1) Download the latest release [zip file](../../releases/latest)
2) Open your Wordpress Admin Dashboard
3) Navigate to the Plugin Page (located on the left menu)
4) Click on "Add New" button (located on the top by the title "Plugins")
5) Click on "Updated Plugin" button (located on the top by the title "Add Plugins")
6) Click on "Choose File" and pick the downloaded zip file from step 1
7) Click "Activate" for the plugin

## Usage

The Plugin adds a media button called "Add Dq Template" to your edit Post/Page

Clicking on the "Add Dq Template" will add the needed template to your editor for usage

**Note**: it is best to use text mode when editing with the template

### Template Details

The template should look like:

``` html
<iframe name="dq_editor" width="100%" height="700">
  <pre id="initialization-code">
  </pre>
  <pre id="code">
  </pre>
  <pre id="hint">
      # markdown here
  </pre>
  <pre id="answer-code" check-vars="" check-stdout >
  </pre>
</iframe>
``` 

### Changing height
To change the height change the attribute `height=700` to a different pixel size.

### `<pre id="code">`
The code provided here will be what the editor starts with when rendered to the student.

### `<pre id="hint">`
The markdown text here will be shown when the student asks for a hint.

### `<pre id="initialization-code">`
The code provided here will be prepended to the student code before running.

### `<pre id="answer-code">`
The code provide here will be used in the checks

#### Checking variables
To check variables between the answer-code and student code list them, common seperated on the attribue `check-vars=""` like `check-vars="x, count"`

#### Checking output
To check the output (i.e., stdout) add the attribute `check-stdout`. If you do not want to check the stdout remove the attribute.

## Example

```html
<iframe name="dq_editor" width="100%" height=700 >
  <pre id='initialization-code'>
    y = False
    print('smaller')
  </pre>
  <pre id='code'>
    a = 1
    b = 2
    if (a < b)
     print('smaller')
  </pre>
  <pre id="hint">
    # markdown here
    code \`print()\`
  </pre>
  <pre id='answer-code' check-vars="x, count" check-stdout>
    x = True
    count = 5
    if x:
     for count in range(count):
      print(count)
  </pre>
</iframe>
```
