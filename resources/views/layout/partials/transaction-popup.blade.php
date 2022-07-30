<form method="POST" action="{{route('transaction.store')}}" id="create-transaction">
    @csrf
<div class="row">
    <div class="col-md-6">
        <label>Category</label>
        <div class="form-group">
            
            <select class="form-control" id="category-id" name="category_id">
                <option value="">Select </option>
                @foreach ($categories as $value=>$category )
                <option value="{{$value}}">{{$category}}</option>
                    
                @endforeach
              
            </select>
        </div>
    </div>
    <div class="col-md-6">
        <label>Amount</label>
        <div class="form-group">
            
            <input type="number" id="amount" class="form-control" name="amount" placeholder="Amount"/>
        </div>
    </div>
    <div class="col-md-12">
        <label>Note</label>
        <div class="form-group">
            <textarea class="form-control" name="note"></textarea>
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
        $("#create-transaction").validate({
            rules:{
                category_id:"required",
                amount:{
                    required:true,
                    number:true,
                    remote: {
        url: "{{route('transaction.validate-amount')}}",
        type: "get",
        data: {
            amount: function() {
            return $( "#amount" ).val();
          },
          category_id:function(){
return $("#category-id").val()
          }
        },
        dataFilter: function(response) {
           var data = JSON.parse(response);

           return data.success;
       },
    }
                },
            },
            messages:{
                category_id:{
                    required:"this field is required",

                },
                amount:{
                    required:"this field is required",
                    number:"please enter a valid amount",
                    remote:"your balance is less than the value entered",
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