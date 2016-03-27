<?php
$slider = Slider::all();
?>
<table class='table table-striped table-responsive' id='slidertable'>

    <thead>
    <tr>
        <th>Slider</th>

    </tr>
    </thead>
    <tbody>
        <?php $i = 1; ?>
        @foreach($slider as $slider)
        <tr>
        <td >
            <div class="col-xs-12">
                <div class="col-sm-4">
                    {{ HTML::image("uploads/slider/{$slider->image1}","",array('class'=>'img-rounded thumbnail','style'=>'height:100px;width:100px')) }}

                </div>
                <div class="col-sm-8" style="font-size: 12px">
                    <div class="col-xs-6">
                        Title : <strong>{{ $slider->title1 }}</strong><br><br>
                        Description : <strong>{{ $slider->description1 }}</strong>

                </div>
            </div>
            <div class="col-xs-12 links" id="{{$slider->id }}">
                <a href="#a" title="edit slider" class="editslider btn btn-xs btn-info"><i class="fa fa-pencil text-info"></i> edit</a>&nbsp;&nbsp;&nbsp;
                <a href="#s" title="delete slider" class="deleteslider btn btn-xs btn-danger"><i class="fa fa-trash-o text-info"></i> delete</a>&nbsp;&nbsp;&nbsp;
            </div>
                </div>

        </td>
            </tr>
        <tr>
        <td >
            <div class="col-xs-12">
                <div class="col-sm-4">

                    {{ HTML::image("uploads/slider/{$slider->image2}","",array('class'=>'img-rounded thumbnail','style'=>'height:100px;width:100px')) }}

                </div>
                <div class="col-sm-8" style="font-size: 12px">
                    <div class="col-xs-6">
                        Title : <strong>{{ $slider->title2}}</strong><br><br>
                        Description : <strong>{{ $slider->description2 }}</strong>

                    </div>
                </div>
                <div class="col-xs-12 links" id="{{$slider->id }}">
                    <a href="#a" title="edit slider" class="editslider btn btn-xs btn-info"><i class="fa fa-pencil text-info"></i> edit</a>&nbsp;&nbsp;&nbsp;
                    <a href="#s" title="delete slider" class="deleteslider btn btn-xs btn-danger"><i class="fa fa-trash-o text-info"></i> delete</a>&nbsp;&nbsp;&nbsp;
                </div>
            </div>

        </td>
        </tr>
        <tr>
        <td >
            <div class="col-xs-12">
                <div class="col-sm-4">

                    {{ HTML::image("uploads/slider/{$slider->image3}","",array('class'=>'img-rounded thumbnail','style'=>'height:100px;width:100px')) }}
                 </div>
                <div class="col-sm-8" style="font-size: 12px">
                    <div class="col-xs-6">
                        Title : <strong>{{ $slider->title3 }}</strong><br><br>
                        Description : <strong>{{ $slider->description3 }}</strong>

                    </div>
                </div>
                <div class="col-xs-12 links" id="{{$slider->id }}">
                    <a href="#a" title="edit slider" class="editslider btn btn-xs btn-info"><i class="fa fa-pencil text-info"></i> edit</a>&nbsp;&nbsp;&nbsp;
                    <a href="#s" title="delete slider" class="deleteslider btn btn-xs btn-danger"><i class="fa fa-trash-o text-info"></i> delete</a>&nbsp;&nbsp;&nbsp;
                </div>
            </div>

        </td>
        </tr>

        @endforeach
    </tbody>
</table>

<!--script to process the list of rooms-->
<script>
    $(document).ready(function (){

        $("#slidertable").dataTable({
            "bJQueryUI": true,
            "sPaginationType": "full_numbers",
            "fnDrawCallback": function( oSettings ) {
//               $("#stafftable").find("td.links a").hide();
//               $("#stafftable").find("tr").hover(function(){
//                   $(this).find("td.links a").show()
//               },function(){
//                   $(this).find("td.links a").hide();
//               })
                $(".editslider").click(function(){
                    var id1 = $(this).parent().attr('id');
                    $("#addslider").html("<br><i class='fa fa-spinner fa-spin'></i>loading...");
                    $("#addslider").load("<?php echo url("slider/edit") ?>/"+id1);
                })

                //deleting a room
                $(".deleteslider").click(function(){
                    var id1 = $(this).parent().attr('id');
                    $(".deleteslider").show("slow").parent().parent().find("span").remove();
                    var btn = $(this).parent().parent().parent();
                    $(this).hide("slow").parent().append("<span><br>Are You Sure <br /> <a href='#s' id='yes' class='btn btn-success btn-xs'><i class='fa fa-check'></i> Yes</a> <a href='#s' id='no' class='btn btn-danger btn-xs'> <i class='fa fa-times'></i> No</a></span>");
                    $("#no").click(function(){
                        $(this).parent().parent().find(".deletslider").show("slow");
                        $(this).parent().parent().find("span").remove();
                    });
                    $("#yes").click(function(){
                        $(this).parent().html("<br><i class='fa fa-spinner fa-spin'></i>deleting...");
                        $.post("<?php echo url("slider/delete")?>/"+id1,function(data){
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


