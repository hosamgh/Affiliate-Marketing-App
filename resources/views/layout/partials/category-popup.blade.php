<form method="POST" action="{{route('category.store')}}" id="create-category">
    @csrf
<div class="row">
    <div class="col-md-6">
        <label>Type</label>
        <div class="form-group">
            
            <select class="form-control" name="type">
                <option value="">Select </option>
                <option value="income">Income </option>
                <option value="expenses">Expenses </option>
            </select>
        </div>
    </div>
    <div class="col-md-6">
        <label>Title</label>
        <div class="form-group">
            
            <input type="text" class="form-control" name="title" placeholder="Title"/>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <input type="submit" class="btn btn-primary" value="Save"/>
    </div>
</div>
</form>
<script>
    $(function(){
        $("#create-category").validate({
            rules:{
                title:"required",
                type:"required",
            },
            messages:{
                title:{
                    required:"this field is required",

                },
                type:{
                    required:"this field is required"
                }
            },
            submitHandler:function(form){
                $('#submit').attr('disabled','disabled');
   form.submit();
                return false;
            }
        })
    })
</script>