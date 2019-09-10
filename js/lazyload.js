async function getData (){
    const firstResponse = await fetch('js/academy.json');
    const data = await firstResponse.json();
    loadDOM(data);
}

getData();

function loadDOM(arrNotes){
    document.querySelector('.academy-list').innerHTML = '';
    arrNotes.forEach(item=>{
        var link = document.createElement('a');
        link.classList.add('academy-item');
        var filterClass = item.contentType.text.split(" ").join("_");
        filterClass = filterClass.toLowerCase();
        link.classList.add(filterClass);
        link.setAttribute('id','academy-item-'+item.id);
        if(item.contentType.text === "Video"){
            link.setAttribute('data-video-link',item.link);
            link.setAttribute('href','#');
        }else{
            link.setAttribute('href',item.link);
        }
        
        var mainImg = document.createElement('img');
        mainImg.setAttribute('src',item.imgSrc);

        var div = document.createElement('div');
        
        var academyCard = document.createElement('div');
        academyCard.classList.add('academy-card');

        var cardTitle = document.createElement('div');
        cardTitle.classList.add('card-title');
        cardTitle.textContent = item.title;

                 var cardIcons = document.createElement('div');
                cardIcons.classList.add('card-icons');
                var cardIconsItem = document.createElement('div');
                cardIconsItem.classList.add('card-icons-item');
                var imgIconItem = document.createElement('img');
                imgIconItem.setAttribute('src',item.contentType.icon);
                var spanIconItem = document.createElement('span');
                spanIconItem.textContent = item.contentType.text;
        
            var cardIconsItemTime = document.createElement('div');
            cardIconsItemTime.classList.add('card-icons-item','time');
            var imgIconItemTime = document.createElement('img');
            var iconTimeSrc = 'https://atomicwallet.io/css/images/icons/academy/stopwatch.svg';
            imgIconItemTime.setAttribute('src',iconTimeSrc);
            var spanIconItemTime = document.createElement('span');
            spanIconItemTime.textContent = item.timeFor;


            cardIconsItemTime.appendChild(imgIconItemTime);
            cardIconsItemTime.appendChild(spanIconItemTime);
            cardIconsItem.appendChild(imgIconItem);
            cardIconsItem.appendChild(spanIconItem);
            
            cardIcons.appendChild(cardIconsItem);
            cardIcons.appendChild(cardIconsItemTime);

            academyCard.appendChild(cardTitle);
            academyCard.appendChild(cardIcons);

            div.appendChild(academyCard);
            link.appendChild(mainImg);
            link.appendChild(div);
           
            document.querySelector('.academy-list').appendChild(link);

            if( !(link.offsetTop < window.innerHeight + window.pageYOffset)){
                link.classList.add('hide');
            }
    
})

youtubeVideo();

}


function lazyLoad(){

    let lazyNotes = [...document.querySelectorAll('.academy-item')];
    let inAdvance = 300;
    lazyNotes.forEach(lazyNote => {
        
        if( (lazyNote.offsetTop < window.innerHeight + window.pageYOffset + inAdvance) && !(lazyNote.classList.contains('loaded-note')) && (lazyNote.classList.contains('hide')) && !(lazyNote.classList.contains('fadeOut')) ){
            lazyNote.classList.add('loaded-note');
            lazyNote.classList.remove('hide');
        }

        
    })
}


function filter(){
    $(function(){
        var activated = false;
        $('a.filter-by').click(function(e){
            e.preventDefault();
            let filter = $(this).data('filter');
            let arrFilters = ['blockchain','tutorials','video','security','crypto_projects']
            if(!activated && ($('.academy-list').attr('data-filter-by') ==='' && $('.academy-item').hasClass('hide'))){
                
                $('.academy-list').attr('data-filter-by',filter);
                $.each(arrFilters,function(key,val){
                    if(filter !== val){
                        $('.'+val).fadeOut(200);
                        $('.'+val).addClass('filtered');
                    }else{
                        $('.'+val).removeClass('hide');
                    }
                })
                activated = true;

            }else if($('.academy-list').attr('data-filter-by') === filter){
                $('.academy-list').attr('data-filter-by','');
                $('.filtered').fadeIn(200);
                activated = false;
            }else{
                $.each(arrFilters,function(key,val){
                    if(filter !== val){
                        $('.'+val).fadeOut(200);
                        $('.'+val).addClass('filtered');
                        $('.'+filter).fadeIn(200);
                        $('.academy-list').attr('data-filter-by',filter);
                    }
                }) 
            }
           

        })
    })
}


  function youtubeVideo(){
        document.querySelectorAll('.video').forEach(item =>{
          item.addEventListener('click',function(e){
              e.preventDefault();
              let src = this.getAttribute('data-video-link');
              let layerVideo  = document.createElement('div');
              layerVideo.classList.add('overlay-utube-video');
              let objectTag = document.createElement('iframe');
              let closebtn = document.createElement('span');
              closebtn.classList.add('close-frame');
              closebtn.innerHTML = '&#10005;'
              objectTag.setAttribute('src',src);
              layerVideo.appendChild(objectTag);
              layerVideo.appendChild(closebtn);
              layerVideo.addEventListener('click',function(){
                  this.remove();
              })
              document.querySelector('body').appendChild(layerVideo);

          })
      })
      
  }




document.addEventListener("DOMContentLoaded", lazyLoad);
document.addEventListener("DOMContentLoaded", filter);
window.addEventListener('scroll',lazyLoad)
window.addEventListener('resize',lazyLoad)
