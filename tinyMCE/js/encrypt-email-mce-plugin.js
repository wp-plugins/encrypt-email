(function() {
  tinymce.PluginManager.add( 'lw_mce_encrypt_email', function( editor, url ) {
    editor.addButton( 'lw_mce_encrypt_email', {
      text:    'Encrypt Email',
      icon:    false,
      onclick: function() {
        var email = editor.selection.getContent();
        editor.insertContent( '[encrypted_email text=""]' + email + '[/encrypted_email]' );
      }
    });
  }); 
}) ();