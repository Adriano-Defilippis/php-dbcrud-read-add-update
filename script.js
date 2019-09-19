function getGrandParentAttr(this_click){

    var parent = this_click.parent();
    var gran_parent = parent.parent();
    var new_parent = gran_parent.parent();

    var category = new_parent.data('cat');


    return category;
    
}

function getParentAttr(this_click){

    var parent = this_click.parent();
    var gran_parent = parent.parent();
    var category = gran_parent.data('cat');


    return category;
    
}

function deleteItemCrud(){
    
    var category = getParentAttr($(this));

    var new_name = prompt('inserisci il nome della bevanda') ;
    var new_brand = prompt('Inserisci la marca') ;
    var new_price = prompt('Inserisci il prezzo') ;
    var new_date = prompt('Immettere la data di scadenza') ;

    $.ajax({

        url: 'api_add_prod.php',
        method: 'GET',
        data: {
            nome: new_name,
            marca: new_brand,
            prezzo: new_price,
            data_scadenza: new_date,
            category_prod: category
        },

        success: function(data){
            getData()
        },
        error: function(err){
            console.log("Errore chiamata INSERT IN TO");
            
        }
    });
    
   
}

function printData(data){

    var source = $('#item-template').html();
    var template = Handlebars.compile(source);

    for (let i = 0; i < data.length; i++) {
        const element = data[i];
        
        var context = element;

        var html = template(context);
        
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
            $('.specifiche_prod').remove();
            printData(data)
               
        },
        error: function(err){
            console.log("errore chimata api");
            
        }
    });
}

function init() {
    getData();

    $(document).on('click', '.cat_prod .fa-database', deleteItemCrud);
    
    
}

$(document).ready(init);
