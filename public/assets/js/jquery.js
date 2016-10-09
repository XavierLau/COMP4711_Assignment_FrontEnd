 <?php
 $(document).ready(function() {
        
                $('.buttons').click(function(){
                    var text = $('.list-group-item').val();
                    if(text.length){        
                        $('.newitems').append('<li><input type="button">'+text+'</li>')
                    }
                });
                $('.buttons').onClick(function(){
                    alert("dfasdf");
                    $('<li class="list-group-item">' + this.value + '</li>').hide().appendTo('.newitems').slideDown();

                    this.value = '';
                });
});
