<link rel="stylesheet" href="css/timeline.css">
<link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,600,700' rel='stylesheet' type='text/css'>
<body>
    <?php include("new_header.php"); ?>
    <?php include("new_navigation_bar_full_width.php"); ?>

<section style="display:flex;flex-direction:column;align-items:center;position:relative">

    <ul class="timeline">
        <li class="timeline-li">
            <div class="rc-details">
                <h4>Almora</h4>
                <p>Laying down of foundation stone</p>
            </div>
            <div class="rc-estd-year">
            <h4>1989</h4>
            </div>
        </li>
        <li class="timeline-li">
            <div class="rc-details">
                <h4>HRC</h4>
                <p>Est in 1989 in Mohal-Kulli, Himachal Pradesh</p>
            </div>
            <div class="rc-estd-year">
            <h4>1989</h4>
            </div>
        </li>
        <li class="timeline-li">
            <div class="rc-details">
                <h4>GRC</h4>
                <p>Est in 1989 in Mohal-Kulli, Himachal Pradesh</p>
            </div>
            <div class="rc-estd-year">
            <h4>1989</h4>
            </div>
        </li>
        <li class="timeline-li">
            <div class="rc-details">
                <h4>SRC</h4>
                <p>Est in 1989 in Mohal-Kulli, Himachal Pradesh</p>
            </div>
            <div class="rc-estd-year">
            <h4>1989</h4>
            </div>
        </li>
        <li class="timeline-li">
             <div class="rc-details">
                <h4>NERC</h4>
                <p>Est in 1989 in Mohal-Kulli, Himachal Pradesh</p>
            </div>
            <div class="rc-estd-year">
            <h4>1989</h4>
            </div>
        </li>
        <li class="timeline-li">
            <div class="rc-details">
                <h4>Montain Division</h4>
                <p>Est in 1989 in Mohal-Kulli</p>
            </div>
                <div class="rc-estd-year">
                <h4>1989</h4>
                </div>
            </div>
        </li>
        <li class="timeline-li">
            <div class="rc-details">
                <h4>LRC</h4>
                <p>Est in 2018 in Mohal-Kulli, Himachal Pradesh</p>
            </div>
            <div class="rc-estd-year">
            <h4 style="margin-top: 11px;">2018</h4>
            </div>
        </li>
    </ul>
    <ul class="time-bar" ><li>hi my naem ia n</li></ul>

</section>

<div class="main-grid">
                <div class="grid-inner">
                    <div class="grid-inner-2">
                         <h4>LRC</h4>
                        <p>Est in 2018 in Mohal-Kulli, Himachal Pradesh</p>
                    </div>
                </div>
                <div class="grid-inner">
                    <div class="grid-inner-2">
                         <h4>LRC</h4>
                        <p>Est in 2018 in Mohal-Kulli, Himachal Pradesh</p>
                    </div>
                </div>
                <div class="grid-inner">
                    <div class="grid-inner-2">
                         <h4>LRC</h4>
                        <p>Est in 2018 in Mohal-Kulli, Himachal Pradesh</p>
                    </div>
                </div>
                <div class="grid-inner">
                    <div class="grid-inner-2">
                         <h4>LRC</h4>
                        <p>Est in 2018 in Mohal-Kulli, Himachal Pradesh</p>
                    </div>
                </div>
                <div class="grid-inner">
                    <div class="grid-inner-2">
                         <h4>LRC</h4>
                        <p>Est in 2018 in Mohal-Kulli, Himachal Pradesh</p>
                    </div>
                </div>
                <div class="grid-inner">
                    <div class="grid-inner-2">
                         <h4>LRC</h4>
                        <p>Est in 2018 in Mohal-Kulli, Himachal Pradesh</p>
                    </div>
                </div>
                <div class="grid-inner">
                    <div class="grid-inner-2">
                         <h4>LRC</h4>
                        <p>Est in 2018 in Mohal-Kulli, Himachal Pradesh</p>
                    </div>
                </div>
</div>

<div class="p-bar">
    <div class="p-bar-inner">

    </div>
</div>
<script>
$(document).ready(function(){
        var __OBJECTS = [];
        hideTimelineitem();
    function hideTimelineitem(){
        $('.timeline li').each(function() {

            __OBJECTS.push($(this));
            $('.timeline li').css("opacity","0");
           
        });
        console.log(__OBJECTS.length);
      //  console.log(__OBJECTS);
    }
    console.log(__OBJECTS.length);
        __OBJECTS.reverse();    
      console.log(__OBJECTS.length);
        addPositioningClasses();
       
        function addPositioningClasses() {
            
            
            
            var $card = __OBJECTS.pop();
         
             console.log(__OBJECTS.length);
             console.log(__OBJECTS);
             $card.css('opacity','1');
            if (__OBJECTS.length) {
            
             alert(111);
              
                setTimeout(addPositioningClasses, 1000)
                
            }
            if (!__OBJECTS.length) {
                $card.css('opacity','1');
                console.log(1111111);
                alert();
               // hideTimelineitem();
               // __OBJECTS.reverse(); 
              //  addPositioningClasses();
            }
            
             
        }
        function test($card){
           // $card.css('opacity','1');
         //   alert('test');
               hideTimelineitem();
               // __OBJECTS.reverse(); 
               // addPositioningClasses();
        }
});
</script>
</body>