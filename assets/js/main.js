

function get_class_sections(){
    let classes = $("#class_id").val();
    $.get("/api/classes/" + classes + "/sections", function(data){
        $('#section_id').empty();
        $('#section_id').append('<option selected disabled value="">Select...</option>');
        $.each(data, function(index, pt){
            $('#section_id').append('<option value="' + pt.id + '">' + pt.name + '</option>');
        });
    });
}

function load_class_sections(){
    let classes = $("#class_id").val();
    let section = $("#section_id").val();
    $.get("/api/classes/" + classes + "/sections", function(data){
      $('#section_id').empty();
      $('#section_id').append('<option disabled selected  value="">Select...</option>');
      $.each(data, function(index, pt){
          if(Number(section) == (pt.id)){
              $('#section_id').append('<option value="' + pt.id + '"selected>' + pt.name + '</option>');
          } else{
              $('#section_id').append('<option value="' + pt.id + '">' + pt.name + '</option>');
          }
      });
    });
}
