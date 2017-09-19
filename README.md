# Dataquest Caravan Wordpress Plugin

This plugin enables you to embed the code running system that powers [Dataquest](https://www.dataquest.io) into your Wordpress blog.  Note that this is only the repo and README for the Wordpress plugin.  The main Caravan repo is [here](https://github.com/dataquestio/caravan), and it's recommended to read it first.

## Installation Instructions

### Admin Dashboard

1) Download the latest plugin release [zip file](../../releases/latest)
2) Open your Wordpress admin dashboard
3) Navigate to the plugin page (located on the left menu)
4) Click on "Add New" button (located on the top by the title "Plugins")
5) Click on "Updated Plugin" button (located on the top by the title "Add Plugins")
6) Click on "Choose File" and pick the downloaded zip file from step 1
7) Click "Activate" for the plugin

## Usage

The Plugin adds a media button called "Add Dq Template" to the top of your editor when you're creating or editing a post.

Clicking on the "Add Dq Template" will add the needed template to your post for a single embedded caravan editor.

**Note**: It's best to use text mode when editing with this template, as it can cause issues with visual mode.

![Caravan template button](https://s3.amazonaws.com/dq-content/caravan/caravan_button.png)

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

## Usage

For more details on how to use and customize the template and Caravan, please see the main [Caravan repo](https://github.com/dataquestio/caravan).
