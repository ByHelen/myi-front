  tinymce.init({
  selector: '.editor',
  height: 200,
  menubar: false,
  theme: "modern",
  plugins: [
    'advlist autolink lists link image charmap print preview anchor textcolor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table contextmenu paste code help wordcount'
  ],
  toolbar: 'insert | undo redo |  formatselect | bold italic backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
  content_css: [
    '//fonts.googleapis.com/css?family=Roboto:300,400,500,600,700,800,900',
    'assets/editor/skins/lightgray/skin.min.css']
  });


$.fn.select2.defaults.set( "theme", "bootstrap" );

var placeholder = "";


$( ".select2-single, .select2-multiple" ).select2( {
    placeholder: placeholder,
    width: null,
    containerCssClass: ':all:'
} );

$( ".select2-allow-clear" ).select2( {
    allowClear: true,
    placeholder: placeholder,
    width: null,
    containerCssClass: ':all:'
} );


$(document).ready(function() {
  $('#createone').hide();
  $('#createtwo').hide();
  $('#createthree').hide();
  $('#selectseed').hide();
  $('#viewseed').hide();
});

function typebracket1() {
  $('#createone').show();
  $('#createtwo').hide();
  $('#createthree').hide();
  $('html, body').animate({
    scrollTop: $("#divscroll").offset().top
  }, 1000)
}


function typebracket2() {
  $('#createone').hide();
  $('#createtwo').show();
  $('#createthree').hide();
   $('html, body').animate({
    scrollTop: $("#divscroll").offset().top
  }, 1000)
}

function typebracket3() {
  $('#createone').hide();
  $('#createtwo').hide();
  $('#createthree').show();
   $('html, body').animate({
    scrollTop: $("#divscroll").offset().top
  }, 1000)
}

 $('#tablecodes').DataTable( {
    
  dom: 'Bfrtip',
      buttons: [
          // 'pageLength'
      ],

      "searching": false,
      "order": [[ 1, "desc" ]],
  } );


  $('#tableplayers').DataTable( {
    
  dom: 'Bfrtip',
      buttons: [
          // 'pageLength'
      ],

      "searching": false,
      "order": [[ 0, "asc" ]],
  } );


  $('#tableseed').DataTable( {
    
  dom: 'Bfrtip',
      buttons: [
          // 'pageLength'
      ],

      "searching": false,
      "order": [[ 3, "desc" ]],
  } );


function showselect() {
  $('#selectseed').show();
  $('#viewseed').hide();
}


function opendetailseed() {
  $('#selectseed').hide();
  $('#viewseed').show();
  $('#modal-confirm-seed').modal('hide');
}



function openbarmenutour() {
  $('#barra-tour').addClass('barra-open');
  $('#barra-tour').removeClass('barra-close');
}

function closebarmenutour() {
  $('#barra-tour').addClass('barra-close');
   $('#barra-tour').removeClass('barra-open');
}