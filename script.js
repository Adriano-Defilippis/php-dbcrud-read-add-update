function printCategoryTemplate(data){
    
    var source = $('#category_template').html();
    var template = Handlebars.compile(source);

    const element = data[i];
    const category = element['category_prod'];

    $('.' +  category + '').remove();
    
    var context = {
        categoria: category
    };

    var html = template(context);

    $('.' +  category + '').append(html);
    
}

function printData(data){

    var source = $('#item-template').html();
    var template = Handlebars.compile(source);

    for (let i = 0; i < data.length; i++) {
        const element = data[i];
        
        var context = element;

        var html = template(context);

        console.log("categoryattr",$("[data-cat*='" + element['category_prod'] + "']") );
        
        
        $("[data-cat*='" + element['category_prod'] + "']").append(html);
    }

    var context = data
}

function getData(){

    $.ajax({

        url: 'api_read_prod.php',
        method: "GET",
        
        success: function(data){
            console.log(data);

            printData(data)
               
        },
        error: function(err){
            console.log("errore chimata api");
            
        }
    });
}

function init() {
    getData();

    $(document).on('click', '.cat_prod[data-cat]', function(){

        console.log($(this).data("cat"));
        
    });
    
    
}

$(document).ready(init);
