<?php
$gallery = Gallery::all();
?>
<table class='table table-striped table-responsive' id='gallerytable'>

    <thead>
    <tr>
        <th>Gallery</th>

    </tr>
    </thead>
    <tbody>
    <tr>
        <?php $i = 1; ?>
        @foreach($gallery as $gallery)
        <td >
            <div class="col-xs-12">
                <div class="col-sm-4">
                    {{ HTML::image("uploads/gallery/{$gallery->image}","",array('class'=>'img-rounded thumbnail','style'=>'height:100px;width:100px')) }}

                </div>
                <div class="col-sm-8" style="font-size: 12px">
                    <div class="col-xs-6">
                        Title : <strong>{{ $gallery->title }}</strong><br><br>
                        Description : <strong>{{ $gallery->description }}</strong>

                </div>
            </div>
            <div class="col-xs-12 links" id="{{$gallery->id }}">
                <a href="#a" title="edit Gallery" class="editgallery btn btn-xs btn-info"><i class="fa fa-pencil text-info"></i> edit</a>&nbsp;&nbsp;&nbsp;
                <a href="#s" title="delete Gallery" class="deletegallery btn btn-xs btn-danger"><i class="fa fa-trash-o text-info"></i> delete</a>&nbsp;&nbsp;&nbsp;
            </div>

        </td>
    </tr>
    @endforeach

    </tbody>
</table>

<!--script to process the list of rooms-->
<script>
    $(document).ready(function (){

        $("#gallerytable").dataTable({
            "bJQueryUI": true,
            "sPaginationType": "full_numbers",
            "fnDrawCallback": function( oSettings ) {
//               $("#stafftable").find("td.links a").hide();
//               $("#stafftable").find("tr").hover(function(){
//                   $(this).find("td.links a").show()
//               },function(){
//                   $(this).find("td.links a").hide();
//               })
                $(".editgallery").click(function(){
                    var id1 = $(this).parent().attr('id');
                    $("#addgallery").html("<br><i class='fa fa-spinner fa-spin'></i>loading...");
                    $("#addgallery").load("<?php echo url("gallery/edit") ?>/"+id1);
                })

                //deleting a room
                $(".deletegallery").click(function(){
                    var id1 = $(this).parent().attr('id');
                    $(".deletegallery").show("slow").parent().parent().find("span").remove();
                    var btn = $(this).parent().parent().parent();
                    $(this).hide("slow").parent().append("<span><br>Are You Sure <br /> <a href='#s' id='yes' class='btn btn-success btn-xs'><i class='fa fa-check'></i> Yes</a> <a href='#s' id='no' class='btn btn-danger btn-xs'> <i class='fa fa-times'></i> No</a></span>");
                    $("#no").click(function(){
                        $(this).parent().parent().find(".deletegallery").show("slow");
                        $(this).parent().parent().find("span").remove();
                    });
                    $("#yes").click(function(){
                        $(this).parent().html("<br><i class='fa fa-spinner fa-spin'></i>deleting...");
                        $.post("<?php echo url("gallery/delete")?>/"+id1,function(data){
                            btn.hide("slow").next("hr").hide("slow");
                        });
                    });
                });//endof deleting category
            }
        });
        $('input[type="text"]').addClass("form-control");
        $('select').addClass("form-control");


    });
</script>


