var project=[];
var times;
var index = 0;
var technoImagePath = 'assets/images/logos/';
var basePadding = 30;
var baseMargin = 30;
var responsiveWidth = 769;

$(function(){

  $('a[href^="#"]').on('click', function(evt){
       // bloquer le comportement par défaut: on ne rechargera pas la page
       evt.preventDefault(); 
       // enregistre la valeur de l'attribut  href dans la variable target
    var target = $(this).attr('href');
       /* le sélecteur $(html, body) permet de corriger un bug sur chrome 
       et safari (webkit) */
    $('html, body')
       // on arrête toutes les animations en cours 
       .stop()
       /* on fait maintenant l'animation vers le haut (scrollTop) vers 
        notre ancre target */
       .animate({scrollTop: $(target).offset().top}, 1500 );
  });

	/****Récupération du fichier JSon avac la méthode ajax****/
   $.ajax({
      url: "assets/js/portfolio.json",
      method: "GET",
      dataType: "json"
    }).done(function(data){
  
        project=data;

        $(".project").on('click',function(){

          var id = $(this).attr('id');
         /* console.log(project[id]);*/

          $('#popin-maintitle').html(project[id].name);
          $('#popin-description').html(project[id].description);
          $("#popin-link").attr('href',project[id].link);
          $('#popin-sourcecode').attr('href',project[id].sourcecode);
          $(".popin-list").html("");
          $('#img-project').attr('src',project[id].image[0]);
          
/*********CAROUSSEL********/
          times = setInterval(function(){
    
            if(index == project[id].image.length) index = 0;

            $('#img-project').attr('src',project[id].image[index]);
              
            index++;

          },2000);
         /* console.log(times);*/
         /*console.log(project[id].image);*/

//Affichage des technos

          for (var i = 0; i < project[id].technos.length; i++) {
                
            var boucle = project[id].technos[i];
            console.log(boucle);

            $(".popin-list").append("<li class='popin-list-element'><img class='popin-list-image' src= '"+ technoImagePath + boucle + "'></li>");
          }

          //le parent de la popine recouvre le body 
          $('.full-box').fadeIn(500);
          $('body').css('overflow','hidden');

          if(window.innerWidth >= responsiveWidth){

            $('.popin-list').css('padding','0 ' + basePadding / project[id].technos.length +'%');
            $('.popin-list-element').css('margin','0 '+ baseMargin / project[id].technos.length +'%');
          }
            
            

        });

    }).fail(function( jqXHR,textStatus){

        alert( "La requête au serveur a échoué: " + textStatus );

      });

  //pour fermer la popin à l'aide du bouton fermer

  $('.full-box').on('click','#popin-button',function(){
      $('.full-box').fadeOut(500);
      $('body').css('overflow','visible');

      clearInterval(times);
      index = 0;
  });

//fait dispaitre la popine si on clique en dehors
  $('.full-box').on('click',function(){
      $('.full-box').fadeOut(500);
      $('body').css('overflow','visible');

      clearInterval(times);
      index = 0;
      
  });
 
  /*responsive*/
/*Créer une variable pour faire un palier*/

if(window.innerWidth < responsiveWidth){

  $('.casual').hide();
}

$( window ).resize(function(){

  if(window.innerWidth >= responsiveWidth){

    $('.casual').show();

  }
  else{

    $('.casual').hide();
  }

});

  $('#burger-button').on('click', function(){

    $('.casual').delay(100).slideToggle(400);
    
  });

/**Fermeture de la popin**/

  $('.full-box').on('click','.popin', function(evt){

      evt.stopPropagation();
  });

/*cache le parent de la popine lorsque le body n'est pas en overflow :hidden*/
  $('.full-box').hide();


});