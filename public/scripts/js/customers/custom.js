$(function() {

    /******************************
    * GLOBAL VARIABLE
    ******************************/
        _token = $('[name=_token]').val();
        urlBase = $('#urlBase').val();



    /******************************
    * MASK
    ******************************/
        $(':input[name=zipcode]').mask('00000-000');



    /******************************
    * SEARCH ZIPCODE
    ******************************/
        $(':input[name=zipcode]').on('blur', function(e){
            var zipcode = $(this).cleanVal();
            $.ajax({
                url: urlBase + '/ajax/searchZipcode',
                headers: { 'X-CSRF-TOKEN' : _token },
                type: 'POST',
                data: { 'zipcode': zipcode },
                async: false,
                success: function(data) {
                    $(':input[name=address]').val(data.logradouro);
                    $(':input[name=neighborhood]').val(data.bairro);
                    $(':input[name=city]').val(data.cidade);
                    $(':input[name=state]').val(data.uf);
                }
            });

        });
});