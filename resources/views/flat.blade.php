<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script></head>
<body>
    <h3>Flat</h3>
    
    <select id="select" name="select">
        <option value="">Select</option>
        @foreach($apartments as $apartment)
        <option value="{{$apartment->id}}">{{$apartment->apartment_name}}</option>
        @endforeach
    </select>
    <input type="text" id="text" name=""text>

</body>
<script type="text/javascript">
@push('scripts')
select.onchange=function(){
    text.innerText=$this.value();

}
// $(document).ready(function() {
//     console.log('sdsd');

// $("#select option").filter(function() {
//     return $(this).val() == $("#text").val();
// }).attr('selected', true);

// $("#select").live("change", function() {

//     $("#text").val($(this).find("option:selected").attr("value"));
// });
// });
   @endpush
   </script>

</html>