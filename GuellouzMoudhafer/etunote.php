<div class="container">

      <div class="starter-template">
        <h2> Etudiants Promo THYP1415 </h2>
        <p class="lead"> 
        <?php
        
        //charge le flux rss dans un objet PHP
          $xml = simplexml_load_file('http://picasaweb.google.com/data/feed/base/user/107401320610499259896/albumid/6065229773950541889?alt=rss&kind=photo&authkey=Gv1sRgCNak7e60l-7VlgE&hl=fr');
        
        //$xml = simplexml_load_file('http://picasaweb.google.com/data/feed/base/user/107401320610499259896/albumid/6065229773950541889?alt=rss&kind=photo&authkey=Gv1sRgCNak7e60l-7VlgE&hl=fr');
       
        // print_r($xml);       
        foreach ($xml->channel->item as $tof) {
           echo "<div class=organisation>";
                echo "<img src='".$tof->enclosure["url"]."' class=photo alt='".$tof->title."' />";
                echo "<div class =legend>".$tof->title."</div>";
           echo "</div>";     
        } ?>    
					
