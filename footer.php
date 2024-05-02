
<?php
        wp_footer();
    ?>
<script>

/*
if(document.querySelector('.video-carousel')){
    
    let api_channel = 'AIzaSyB9GbxXeP7ualdMQ3xa8siUkFGIOVyd--0';

    let id_channel = 'UCmo2_I7Y5jiPxBbk-YwSvfw';
    
    let url_channel = 'https://www.googleapis.com/youtube/v3/search?part=id%2Csnippet&channelId='+id_channel+'&key='+api_channel+'&maxResults=1000&type=video&order=date'
    
    addEventListener('DOMContentLoaded', () => {
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
    //document.getElementById("demo").innerHTML =
            let youtubeJson = JSON.parse(this.responseText);
    
            console.log(youtubeJson);
    
            let count = youtubeJson.items;
    
            //console.log('count: '+count.lenght)
    
            //document.getElementById('iframe_video').setAttribute('src', `https://www.youtube.com/embed/${youtubeJson.items[0].id.videoId}`);
    
    // ============== add to galeria ============================

        let count_vídeos = 0;
		let qtd_video = 10; //quantidade de vdeo
        for(let n = 1; n < youtubeJson.pageInfo.resultsPerPage; n++){

            let ti = youtubeJson.items[n].snippet.title;

            console.log(ti)

            if(ti.includes("Planeta Liz") && count_vídeos < qtd_video){

                let link = document.createElement('a');
                link.setAttribute('href', 'https://www.youtube.com/watch?v='+youtubeJson.items[n].id.videoId);
                link.innerHTML = `<img src="${youtubeJson.items[n].snippet.thumbnails.medium.url}" alt="" target="_blank">`;
    
                document.querySelector('.video-carousel').append(link);

                count_vídeos++;

            }

        }
    
    //document.querySelector('.links_galeria').
    // ============== add to galeria ============================
        }
        xhttp.open("GET", url_channel);
        xhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhttp.send();
    
        $(document).ready(function(){

    
            setTimeout(function(){
                $(".video-carousel").owlCarousel({
                    loop:true,
                    margin: 10,
                    nav:true,
                    autoplay:true,
                    autoplayTimeout: 4000,
                    autoplayHoverPause:true,
                    responsive:{
                        0:{
                            items:1
                        },
                        600:{
                            items:2
                        },
                        1000:{
                            items:3
                        }
                    }
                });
                
                /*
                const articles_play = document.querySelectorAll('.play_thumb');
                articles_play.forEach((item) => {
    
                    item.addEventListener('click', () => {
    
                        document.getElementById('iframe_video').setAttribute('src', `https://www.youtube.com/embed/${item.getAttribute('data-id')}`);
    
                    })
    
                });
                console.log('plays: '+articles_play.length);
                
            }, 0);
    
        });
    
    })
}
*/
</script>
</body>
</html>