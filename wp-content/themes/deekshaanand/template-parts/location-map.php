<?php
$contact_number = get_field('contact_number', 'option');
$contact_email = get_field('contact_email', 'option');
$map_url = get_field('map_url', 'option');
$own_name = get_field('own_name', 'option');
$own_address = get_field('own_address', 'option');
$come_say = get_field('come_say', 'option');
$come_say_address = get_field('come_say_address', 'option');
?>

<section class="location--map-section">
    <div class="container--responsive">
        <div class="location--map-wrap">
            <div class="location--map-image">
                <!-- <iframe class="map-location" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1254121.0179523844!2d-118.0466615616943!3d50.808384436759106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x537165b181fdd2a1%3A0xb85a7505eba9136a!2sDeeksha%20Anand%20Calgary%20Mortgage%20Broker!5e0!3m2!1sen!2sin!4v1726067965451!5m2!1sen!2si" width="900" height="607" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
                <gmp-map center="51.062171936035156,-114.06295776367188" zoom="14" map-id="deeksha-map">
                    <gmp-advanced-marker position="51.062171936035156,-114.06295776367188" title="My location"></gmp-advanced-marker>
                </gmp-map>
            </div>
            <div class="location--map-wrapper">
                <ul class="location--map-content">
                    <li class="map-profile">
                        <h3 class="title-text"><?php echo $own_name ?></h3>
                        <h5 class="sub-text"><?php echo $own_address ?></h5>
                    </li>
                    <li class="map-address">
                        <h3 class="title-text"><?php echo $come_say ?></h3>
                        <h5 class="sub-text"><?php echo $come_say_address ?></h5>
                    </li>
                    <li class="map-contact">
                        <h3 class="title-text">Get in touch</h3>
                        <div class="sub-text">
                            <ul class="contact--info">
                                <li class="contact-link"><a href="tel:<?php echo $contact_number ?>"><?php echo $contact_number ?></a></li>
                                <li class="contact-link"><a href="mailto:<?php echo $contact_email ?>"><?php echo $contact_email ?></a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>