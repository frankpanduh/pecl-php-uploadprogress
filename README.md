# uploadprogress

This is a standalone PHP extension created using PECL_Gen 0.8.5.

## Hacking

There are two ways to modify an extension created using PECL_Gen:

1. You can modify the generated code as with any other PHP extension

2. You can add custom code to the PECL_Gen XML source and re-run pecl-gen

The 2nd approach may look a bit complicated but you have be aware that any
manual changes to the generated code will be lost if you ever change the XML
specs and re-run PECL-Gen. All changes done before have to be applied to the
newly generated code again.

Adding code snippets to the XML source itself on the other hand may be a bit
more complicated but this way your custom code will always be in the generated
code no matter how often you rerun PECL_Gen.

## Building on *nix systems

To compile your new extension, you will have to execute the following steps:

1. $ ./phpize
2. $ ./configure [--enable-uploadprogress]
3. $ make
4. $ make test # NOTE: this doesn't work right now
5. $ [sudo] make install

## Building on Windows

The extension provides the VisualStudio V6 project file

    uploadprogress.dsp

To compile the extension you open this file using VisualStudio, select the
apropriate configuration for your installation (either "Release_TS" or
"Debug_TS") and create `php_uploadprogress.dll`.

After successfull compilation you have to copy the newly created
`php_uploadprogress.dll` to the PHP extension directory (default:
`C:\PHP\extensions`).

## Testing

You can now load the extension using a php.ini directive

    extension="php_uploadprogress.[so|dll]"

or load it at runtime using the dl() function

    dl("php_uploadprogress.[so|dll]");

The extension should now be available, you can test this using the
`extension_loaded()` function:

```php
if (extension_loaded(uploadprogress)) {
    echo "uploadprogress loaded :)";
} else  {
    echo "something is wrong :(";
}
```

The extension will also add its own block to the output of `phpinfo()`;
