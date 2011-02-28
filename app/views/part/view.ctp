<div class='partDesc'>
    <div class='partPic'>
        <?php 
            echo $this->Html->image('http://www.reidsupply.com/images/products/300/'
                .$part['Part']['file_name'],
                array(
                    'alt'   => 'Part Number: '.$part['Part']['id'],
                    'textalign' => 'center',
                    'width' => 200,
                    'height' => 200
                ));
        ?>
    </div>
    <div class='partInfo'>
        <div class='partInfoBlock'>
            <div class='partInfoBlock1'><b>Part ID:</b></div>
            <div class='partInfoBlock2'><?php echo $part['Part']['id']; ?></div>
        </div>
        <div class='partInfoBlock'>
            <div class='partInfoBlock1'><b>Part Name:</b></div>
            <div class='partInfoBlock2'><?php echo $part['Part']['name']; ?></div>
        </div>
        <div class='partInfoBlock'>
            <div class='partInfoBlock1'><b>Part Description:</b></div>
            <div class='partInfoBlock2'><?php echo str_replace(',', '<br/>', $part['Part']['desc']); ?></div>
        </div>
    </div>
</div>
<div class='preview'>
    <iframe 
        src="http://www.reidsupply.com/wucontrol/RemoteCad.aspx?id=<?php echo $part['Part']['id']; ?>"
        width=595
        height=495
        scrolling=no>
        <p>Please use a browser that Supports iFrames</p>
    </iframe>
<div>

