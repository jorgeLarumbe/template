
$(function(){
    
    // script imagen preview
    $('#avatar').change(function()
    {
        readimg(this);
    });

    function readimg(file)
    {
        if(file.files&&file.files[0])
        {
            var reader = new FileReader();
            reader.onload=function(e)
            {
                $('#idimg').attr('src', e.target.result);
            }
            reader.readAsDataURL(file.files[0]);
        }
    }

});