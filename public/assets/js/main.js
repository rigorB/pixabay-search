
$(document).ready(function(){
    var API_KEY = '23284489-343cb46ba590cf0aef693e360';
    $('#search_key').on('change', function(e){


        if($(this).val() !== ''){

            
            var filter = $('input[name=exampleRadios]:checked').val();
            var search_val = $(this).val();
            // var URL = "https://pixabay.com/api/?key="+API_KEY+"&q="+encodeURIComponent(search_val);

                $.ajax({
                    type: 'POST',
                    url: 'searched_pix',
                    data: {
                        search_key: search_val,
                        filter_key: filter
                    },
                    success: function(result){
                        $('#searched_result').html('');
                        let data = JSON.parse(result);
                        console.log(data);
                        if (parseInt(data.totalHits) > 0){
                            $.each(data.hits, function(i, hit){
                                
                                if(filter == 'image'){

                                    $('#searched_result').append(`
                                        <div class="col-md-3">
                                            <img src="${hit.largeImageURL}" height="400" width="400">
                                        </div>
                                    `);

                                }else if(filter == 'video'){

                                    $('#searched_result').append(`
                                        <div class="col-md-3">
                                            <iframe width="400" height="400"
                                                src="${hit.videos.small.url}">
                                            </iframe>
                                        </div>
                                    `);

                                }
                
                            });

                        }else{

                            $('#searched_result').append(`
                                <h5 class="text-center">No Result Found</h5>
                            `);

                        }

                    }

                });

            }    
    
    });


});