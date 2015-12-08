Drupal.behaviors.carteinteractive = function (context) {
//$(document).ready(function() {
//(function($){

	//Drupal.behaviors.carteinteractive = function (context) {
		$(document).ready(function() {

			$('.map').append('<div class="overlay">').append('<div class="tooltip">Carte interactive</div>');

			$('.map .tooltip').hide();

			var reg = [
					{name:'Alsace ('+getNbAnnonceByRegion(4)+')',slug:'4'},
					{name:'Lorraine ('+getNbAnnonceByRegion(21)+')',slug:'21'},
					{name:'Franche-comté ('+getNbAnnonceByRegion(13)+')',slug:'13'},
					{name:'Champagne Ardenne ('+getNbAnnonceByRegion(11)+')',slug:'11'},
					{name:'Picardie ('+getNbAnnonceByRegion(26)+')',slug:'26'},
					{name:'Nord-Pas-de-Calais ('+getNbAnnonceByRegion(24)+')',slug:'24'},
					{name:'île-de-France ('+getNbAnnonceByRegion(17)+')',slug:'17'},
					{name:'Haute-Normandie ('+getNbAnnonceByRegion(16)+')',slug:'16'},
					{name:'Basse-Normandie ('+getNbAnnonceByRegion(7)+')',slug:'7'},
					{name:'Bretagne ('+getNbAnnonceByRegion(9)+')',slug:'9'},
					{name:'Pays de la Loire ('+getNbAnnonceByRegion(25)+')',slug:'25'},
					{name:'Centre ('+getNbAnnonceByRegion(10)+')',slug:'10'},
					{name:'Bourgogne ('+getNbAnnonceByRegion(8)+')',slug:'8'},
					{name:'Rhône-Alpes ('+getNbAnnonceByRegion(29)+')',slug:'29'},
					{name:'Auvergne ('+getNbAnnonceByRegion(6)+')',slug:'6'},
					{name:'Limousin ('+getNbAnnonceByRegion(20)+')',slug:'20'},
					{name:'Poitou-Charentes ('+getNbAnnonceByRegion(27)+')',slug:'27'},
					{name:'Aquitaine ('+getNbAnnonceByRegion(5)+')',slug:'5'},
					{name:'Midi-pyrénées ('+getNbAnnonceByRegion(23)+')',slug:'23'},
					{name:'Languedoc-Roussillon ('+getNbAnnonceByRegion(19)+')',slug:'19'},
					{name:"Provence Alpes Côte d'Azur ("+getNbAnnonceByRegion(28)+")",slug:'28'},
					{name:'Corse ('+getNbAnnonceByRegion(12)+')',slug:'12'},
			];


			//tooltip qui suit la souris
				$(document).mouseover(function(evt) {
					var coordY=evt.pageY;
					var coordX=evt.pageX;
					var tooltipHeight=$('.map .tooltip').height();
					var tooltipWidth=$('.map .tooltip').width();
					var issetScroll= document.documentElement.scrollTop;
					var Nav = navigator.appName;
					if(Nav != 'Microsoft Internet Explorer')
						issetScroll= window.pageYOffset;


					//On tient compte du scroll s'il existe
					if(issetScroll!=0) {
						$('.map .tooltip').css('top',coordY-tooltipHeight-issetScroll-10);
					}
					else {
						$('.map .tooltip').css('top',coordY-tooltipHeight-10);
					}

					$('.map .tooltip').css('left',coordX-tooltipWidth/2-10);
				});


			//On met les liens sur les area
			$('.map area').each(function(index) {
				$this=$(this);

				$(this).attr('id',index);

				$(this).attr('href','http://jedonnemesjouets.fr/taxonomy/term/'+reg[index].slug+'/all');
			});

			//On passe sur une région
			$('.map area').mouseover(function(){
				$this=$(this);

				var index=$this.attr('id');

				//console.log(reg[index].name);

				var left= -index*300-300;
				$('.map .tooltip').html(reg[index].name).stop().fadeTo(500,1);
				$('.map .overlay').css({
					backgroundPosition: left+"px 0px"
				});
			});

			//On sort de la map
			$('.map').mouseout(function(){
				$('.map .overlay').css({
						backgroundPosition:"300px 0px"
				});
				$('.map .tooltip').css('display', 'inline').stop().fadeTo(500,0);
			});

		});
	//}; //end behaviors


//})(jQuery);
//});

}; //end behaviors

function getNbAnnonceByRegion(tid) {
	var result=0;
	var opt=Drupal.settings.carteinteractive.regions;

	if(opt[tid]!=undefined) {
		result=opt[tid].nombrearticle;
	}

	return result;
}
