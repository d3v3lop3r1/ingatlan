// JavaScript Document
$(function(){
	$('#uploads').filedrop({
		fallback_id: 'upload_button',   // an identifier of a standard file input element, becomes the target of "click" events on the dropzone
	fallback_dropzoneClick : true,  // if true, clicking dropzone triggers fallback file selection and the fallback element is made invisible.
	url: 'upload.php',				// upload handler, handles each file separately, can also be a function taking the file and returning a url
	paramname: 'imagefile',			// POST parameter name used on serverside to reference file, can also be a function taking the filename and returning the paramname
	withCredentials: true,			// make a cross-origin request with cookies
	headers: { 			// Send additional request headers
		'header': 'value'
	},
	error: function(err, file) {
		switch(err) {
			case 'BrowserNotSupported':
				alert('a böngésző nem támogatja a HTML5 drag and drop technológiát')
				break;
			case 'TooManyFiles':
				alert('túl sok a feltöltendő fájl')
				break;
			case 'FileTooLarge':
				alert('a fájl mérete túl nagy')
				break;
			case 'FileTypeNotAllowed':
				// The file type is not in the specified list 'allowedfiletypes'
				break;
			case 'FileExtensionNotAllowed':
				// The file extension is not in the specified list 'allowedfileextensions'
				break;
			default:
				break;
		}
	},
	allowedfiletypes: ['image/jpeg','image/png','image/gif'],	// filetypes allowed by Content-Type.  Empty array means no restrictions
	allowedfileextensions: ['.jpg','.jpeg','.png','.gif'], // file extensions allowed. Empty array means no restrictions
	maxfiles: 10,
	maxfilesize: 2, 	// max file size in MBs
		
		uploadFinished: function(i,file,response){
			$('#filesarea').append('<span ><img class="upl_image" src="upload/' + response + '" /></span>'),
			$('#upload_response').append('<span><h5>A file '+ response +' néven sikeresen fel lett töltve</h5></span>')
			}
		})

	});