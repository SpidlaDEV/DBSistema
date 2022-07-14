<?php
//Activamos el almacenamiento en el buffer
require 'header_light.php';
?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.5.0/css/foundation.min.css">
    <div class="panel-shop-content grid-container large-9 medium-12 small-12">
        <div class="panel-shop-game-wrapper cell large-9 medium-12 small-12">
            <div class="grid-x grid-padding-x">
                <div class="step-label-container cell large-12 medium-12 small-12">
                    <h3 class="step-label">Seleccione su juego</h3>
                </div>
            </div>
            <div class="grid-x grid-padding-x grid-margin-y panel-shop-game">
                <?php
                $games = [
                    [ 'Farming Simulator 17', '25 de octubre de 2016',   '../public/images/otros/fs17_logo.png', '../public/images/otros/fs17_avatar.png', ],
                    [ 'Farming Simulator 19', '20 de noviembre de 2018', '../public/images/otros/fs19_logo.png', '../public/images/otros/fs19_avatar.png', ],
                    [ 'Farming Simulator 22', '20 de noviembre de 2018', '../public/images/otros/fs22_logo.png', '../public/images/otros/fs22_avatar.png', ],
                ];

                foreach($games as $item){ ?>
                <div class="game cell small-12 medium-6 large-4 short active">
                    <div class="game-content">
                        <div class="game-name">
                            <p class="release-date"><?=$item[1]?></p>
                            <img src="<?=$item[2]?>" alt="">
                            <p><?=$item[0]?></p>
                        </div>
                        <div class="game-img">
                            <img src="<?=$item[3]?>" alt="">
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>

        <div class="panel-shop-edition-wrapper cell large-9 medium-12 small-12">
            <div class="grid-x grid-padding-x">
                <div class="step-label-container cell large-12 medium-12 small-12">
                    <h3 class="step-label">Seleccione su edición</h3>
                </div>
            </div>

            <div class="grid-x panel-shop-edition">
                <div class="cell small-12 panel-standalone-editions">
                    <div class="grid-x grid-padding-x grid-margin-y">
                        <div class="edition standard cell large-3 medium-4 small-6">
                            <div id="standard" class="btn-edition">
                                <div class="edition-name">
                                    <p>Standard Edition</p>
                                </div>
                                <div class="edition-img">
                                    <img src="http://cdn.focus-home.com/admin/games/farming_simulator_19/edition/standard/cover.png" alt="Standard Edition">
                                </div>
                            </div>
                        </div>
                        <div class="edition collector cell large-3 medium-4 small-6">
                            <div id="collector" class="btn-edition">
                                <div class="edition-name">
                                    <p>collector's edition</p>
                                </div>
                                <div class="edition-img">
                                    <img src="http://cdn.focus-home.com/admin/games/farming_simulator_19/edition/collector/cover.png" alt="collector's edition">
                                </div>
                            </div>
                        </div>
                        <div class="edition day_one cell large-3 medium-4 small-6">
                            <div id="day_one" class="btn-edition">
                                <div class="edition-name">
                                    <p>Day one edition</p>
                                </div>
                                <div class="edition-img">
                                    <img src="http://cdn.focus-home.com/admin/games/farming_simulator_19/edition/day_one/cover.png" alt="Day one edition">
                                </div>
                            </div>
                        </div>
                        <div class="edition premium cell large-3 medium-4 small-6">
                            <div id="premium" class="btn-edition">
                                <div class="edition-name">
                                    <p>Premium Edition</p>
                                </div>
                                <div class="edition-img">
                                    <img src="http://cdn.focus-home.com/admin/games/farming_simulator_19/edition/premium/cover.png" alt="Premium Edition">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cell small-12 panel-dlc-editions">
                    <div class="grid-x grid-padding-x grid-margin-y">
                        <div class="cell small-12 dlc-separator"><span class="separator-label">dlc</span>
                        </div>
                        <div class="edition platinum-expansion cell large-3 medium-4 small-6">
                            <div id="platinum-expansion" class="btn-edition">
                                <div class="edition-name">
                                    <p>Platinum Expansion</p>
                                </div>
                                <div class="edition-img">
                                    <img src="https://cdn.focus-home.com/admin/games/farming_simulator_17/edition/platinum-expansion/cover.png" alt="Platinum Expansion (dlc)">
                                </div>
                            </div>
                        </div>
                        <div class="edition seasonpass cell large-3 medium-4 small-6">
                            <div id="seasonpass" class="btn-edition">
                                <div class="edition-name">
                                    <p>Season Pass</p>
                                </div>
                                <div class="edition-img">
                                    <img src="https://cdn.focus-home.com/admin/games/farming_simulator_17/edition/seasonpass/cover.png" alt="Season Pass (dlc)">
                                </div>
                            </div>
                        </div>
                        <div class="edition kuhn cell large-3 medium-4 small-6">
                            <div id="kuhn" class="btn-edition">
                                <div class="edition-name">
                                    <p>Kuhn</p>
                                </div>
                                <div class="edition-img">
                                    <img src="https://cdn.focus-home.com/admin/games/farming_simulator_17/edition/kuhn/cover.png" alt="Kuhn (dlc)">
                                </div>
                            </div>
                        </div>
                        <div class="edition bigbud cell large-3 medium-4 small-6">
                            <div id="bigbud" class="btn-edition">
                                <div class="edition-name">
                                    <p>Big Bud</p>
                                </div>
                                <div class="edition-img">
                                    <img src="https://cdn.focus-home.com/admin/games/farming_simulator_17/edition/bigbud/cover.png" alt="Big Bud (dlc)">
                                </div>
                            </div>
                        </div>
                        <div class="edition official_expansion_2 cell large-3 medium-4 small-6">
                            <div id="official_expansion_2" class="btn-edition">
                                <div class="edition-name">
                                    <p>official expansion 2</p>
                                </div>
                                <div class="edition-img">
                                    <img src="https://cdn.focus-home.com/admin/games/farming_simulator_17/edition/official_expansion_2/cover.png" alt="official expansion 2">
                                </div>
                            </div>
                        </div>
                        <div class="edition Ropa_Pack cell large-3 medium-4 small-6">
                            <div id="Ropa_Pack" class="btn-edition">
                                <div class="edition-name">
                                    <p>ropa pack</p>
                                </div>
                                <div class="edition-img">
                                    <img src="https://cdn.focus-home.com/admin/games/farming_simulator_17/edition/ropa_pack/cover.png" alt="ropa pack">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-shop-form-wrapper grid-x large-9 medium-12 small-12">
            <div class="panel-shop-packshot panel-shop-packshot-mobile cell">
                <div id="slider">
                    <div id="slider-viewer" class="has-slide">
                        <img src="https://cdn.focus-home.com/admin/games/farming_simulator_19/packshot/ps4/standard.png">
                    </div>
                    <ul id="slider-bullets">
                        <li class="media-item">
                            <img src="https://cdn.focus-home.com/admin/games/farming_simulator_19/preorder/new-holland-t6-hd-blue-power.jpg" class="">
                        </li>
                        <li class="media-item">
                            <img src="https://cdn.focus-home.com/admin/games/farming_simulator_19/packshot/ps4/standard.png" class="current">
                        </li>
                    </ul>
                </div>
            </div>
            <div class="panel-shop-edition-description panel-shop-edition-description-mobile cell large-4 medium-4">
                <div class="grid-x grid-padding-x">
                    <div class="shop-edition-description-title-container cell large-12 medium-12 small-12">
                        <p class="shop-edition-description-title">FARM LIKE NEVER BEFORE!</p>
                    </div>
                    <div class="shop-edition-description-title-container cell large-12 medium-12 small-12">
                        <p class="shop-edition-description-paragraphs">The ultimate farming simulation returns with a complete graphics overhaul and the most complete farming experience ever!</p>
                        <p class="shop-edition-description-paragraphs">Become a modern farmer and develop your farm on two huge American and European environments, filled with exciting new farming activities, crops to harvest and animals to tend to.</p>
                        <p class="shop-edition-description-paragraphs">Drive authentic vehicles and machines from all the leading brands, now including the prestigious John Deere - but also Case IH, New Holland, Challenger, Fendt, Massey Ferguson, Valtra, Krone, Deutz-Fahr, and many more.</p>
                        <p class="shop-edition-description-paragraphs">Grow your farm online with other players and download community created mods for an ever-expanding Farming Simulator experience!</p>
                    </div>
                    <div class="cell large-12 medium-12 small-12">
                        <p class="shop-edition-description-paragraph bold"><b>PlayStation®4 exclusive tractor:  New Holland T6 HD Blue Power.</b></p>
                    </div>
                    <div class="cell large-12 medium-12 small-12"></div>
                    <div class="cell large-12 medium-12 small-12"></div>
                </div>
            </div>
            <div class="panel-shop-forms cell large-4 medium-4 left-column">
                <div class="panel-shop-platforms-wrapper">
                    <div class="grid-x grid-padding-x">
                        <div class="step-label-container cell large-12 medium-12 small-12">
                            <p class="step-label">Select your platform</p>
                        </div>
                    </div>
                    <div class="grid-x grid-padding-x panel-shop-platform align-self-middle align-center animation">
                        <div id="ps4" class="cell large-4 medium-12 small-12 active">
                            <div class="btn-platform">
                                <img src="http://cdn.focus-home.com/admin/common/platforms/logo_ps4.png">
                            </div>
                        </div>
                        <div id="xone" class="cell large-4 medium-12 small-12">
                            <div class="btn-platform">
                                <img src="http://cdn.focus-home.com/admin/common/platforms/logo_xone.png">
                            </div>
                        </div>
                        <div id="pc" class="cell large-4 medium-12 small-12">
                            <div class="btn-platform">
                                <img src="http://cdn.focus-home.com/admin/common/platforms/logo_pc_apple_alt.png">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-countries-wrapper">
                    <div class="grid-x grid-padding-x animation cell large-12 medium-12 small-12">
                        <div class="step-label-container cell large-12 medium-12 small-12">
                            <p class="step-label">Select your country</p>
                        </div>
                    </div>
                    <div class="grid-x grid-padding-x">
                        <div class="cell large-12 medium-12 small-12">
                            <div class="dropdown-container">
                                <button id="countries-list-button" type="button" data-toggle="countries-list" class="dropdown-current-value dropdown-item" aria-controls="countries-list" data-is-focus="false" data-yeti-box="countries-list" aria-haspopup="true" aria-expanded="false">
                                    <div class="dropdown-item-country">
                                        <p class="dropdown-item-country-name">United Kingdom</p>
                                        <img alt="United Kingdom" src="https://cdn.focus-home.com/admin/common/flags/64x64_short/gb.png" class="dropdown-item-country-flag">
                                    </div>
                                    <img src="https://cdn.focus-home.com/site/tools/arrow_drop_down.svg" class="dropdown-arrow">
                                </button>
                                <div class="dropdown-list-container">
                                    <div class="dropdown-list-cell">
                                        <div id="countries-list" data-dropdown="vbkpd6-dropdown" class="dropdown-pane dropdown-list scroll" aria-hidden="true" data-yeti-box="countries-list" data-resize="countries-list" aria-labelledby="moh8lj-dd-anchor" style="max-height: 270px;">
                                            <ul class="menu">
                                                <li data-index="8" class="dropdown-item">
                                                    <div class="dropdown-item-country">
                                                        <p class="dropdown-item-country-name">France</p>
                                                        <img alt="France" src="https://cdn.focus-home.com/admin/common/flags/64x64_short/fr.png" class="dropdown-item-country-flag">
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-retailers-wrapper">
                    <div class="grid-x grid-padding-x animation">
                        <div class="step-label-container cell large-12 medium-12 small-12">
                            <p class="step-label">Select your retailer</p>
                        </div>
                    </div>
                    <div class="grid-x grid-padding-x">
                        <div class="cell large-12 medium-12 small-12">
                            <div class="dropdown-container">
                                <button id="retailers-list-button" type="button" data-toggle="retailers-list" class="dropdown-current-value dropdown-item" aria-controls="retailers-list" data-is-focus="false" data-yeti-box="retailers-list" aria-haspopup="true" aria-expanded="false">
                                    <div class="dropdown-item-retailer">
									<span class="dropdown-item-retailer-type digital">
										digital
									</span>
                                        <p class="dropdown-item-retailer-name">PlayStation Store</p>
                                    </div>
                                    <img src="https://cdn.focus-home.com/site/tools/arrow_drop_down.svg" class="dropdown-arrow">
                                </button>
                                <div class="dropdown-list-container">
                                    <div class="dropdown-list-cell">
                                        <div id="retailers-list" data-dropdown="bt4zjw-dropdown" class="dropdown-pane dropdown-list scroll" aria-hidden="true" data-yeti-box="retailers-list" data-resize="retailers-list" aria-labelledby="lm6rz9-dd-anchor" style="max-height: 270px;">
                                            <ul class="menu">
                                                <li data-index="0" class="dropdown-item">
                                                    <div class="dropdown-item-retailer" style="display: none;">
													<span class="dropdown-item-retailer-type digital">
														digital
													</span>
                                                        <p class="dropdown-item-retailer-name">PlayStation Store</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-buy-wrapper">
                    <div class="grid-x grid-padding-x">
                        <div class="cell large-12 medium-12 small-12">
                            <a data-ga_name="click_buy" data-ga_action="Farming Simulator 19 - playstation 4" data-ga_tag="PlayStation Store" href="https://store.sonyentertainmentnetwork.com/#!/cid=EP4133-CUSA11593_00-FARMINGSIMULAT19 " title="PlayStation Store" target="_blank" class="retailer-link">Get it now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-shop-packshot cell large-4 medium-4 small-12">
                <div id="slider">
                    <div id="slider-viewer" class="has-slide">
                        <img src="https://cdn.focus-home.com/admin/games/farming_simulator_19/packshot/ps4/standard.png">
                    </div>
                    <ul id="slider-bullets">
                        <li class="media-item">
                            <img src="https://cdn.focus-home.com/admin/games/farming_simulator_19/preorder/new-holland-t6-hd-blue-power.jpg" class="">
                        </li>
                        <li class="media-item">
                            <img src="https://cdn.focus-home.com/admin/games/farming_simulator_19/packshot/ps4/standard.png" class="current">
                        </li>
                    </ul>
                </div>
            </div>
            <div class="panel-shop-edition-description cell large-4 medium-4 small-12">
                <div class="grid-x grid-padding-x">
                    <div class="shop-edition-description-title-container cell large-12 medium-12 small-12">
                        <p class="shop-edition-description-title">FARM LIKE NEVER BEFORE!</p>
                    </div>
                    <div class="shop-edition-description-title-container cell large-12 medium-12 small-12">
                        <p class="shop-edition-description-paragraphs">The ultimate farming simulation returns with a complete graphics overhaul and the most complete farming experience ever!</p>
                        <p class="shop-edition-description-paragraphs">Become a modern farmer and develop your farm on two huge American and European environments, filled with exciting new farming activities, crops to harvest and animals to tend to.</p>
                        <p class="shop-edition-description-paragraphs">Drive authentic vehicles and machines from all the leading brands, now including the prestigious John Deere - but also Case IH, New Holland, Challenger, Fendt, Massey Ferguson, Valtra, Krone, Deutz-Fahr, and many more.</p>
                        <p class="shop-edition-description-paragraphs">Grow your farm online with other players and download community created mods for an ever-expanding Farming Simulator experience!</p>
                    </div>
                    <div class="cell large-12 medium-12 small-12">
                        <p class="shop-edition-description-paragraph bold"><b>PlayStation®4 exclusive tractor:  New Holland T6 HD Blue Power.</b></p>
                    </div>
                    <div class="cell large-12 medium-12 small-12"></div>
                    <div class="cell large-12 medium-12 small-12"></div>
                </div>
            </div>
        </div>
    </div>
<?php
require 'footer.php';
?>

<style lang="css">
    @import url(https://fonts.googleapis.com/css?family=Oxygen:300,400,700&#39;);

    .panel-shop-content {
        font-family: Oxygen, serif;
        padding: 50px 0;
    }
    .panel-shop-content .panel-shop-game-wrapper {
        padding: 30px 0;
    }
    .panel-shop-content .panel-shop-game-wrapper .step-label-container {
        padding-bottom: 30px;
    }
    .panel-shop-content .panel-shop-game-wrapper .step-label-container .step-label {
        margin: 0;
        font-size: 1.5rem;
        color: #1d2027;
        font-weight: bold;
        padding-left: 15px;
        padding-top: 5px;
        padding-bottom: 5px;
        border-left: 3px solid #f90;
    }
    .panel-shop-content .panel-shop-game-wrapper .panel-shop-game .game.short .game-content {
        height: 70px;
        transition: 0.25s ease-out;
    }
    .panel-shop-content .panel-shop-game-wrapper .panel-shop-game .game.short .game-content::after {
        background: rgba(29, 32, 39, .80);
        height: 100%;
        transition: 0.25s ease-out;
    }
    .panel-shop-content .panel-shop-game-wrapper .panel-shop-game .game.short .game-content .game-name {
        bottom: inherit;
        padding: 0;
        height: 100%;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
    }
    .panel-shop-content .panel-shop-game-wrapper .panel-shop-game .game.short .game-content .game-name .release-date {
        display: none;
    }
    .panel-shop-content .panel-shop-game-wrapper .panel-shop-game .game.short:hover .game-name p {
        transition: 0.25s ease-out;
        color: #f90;
        text-shadow: none;
    }
    .panel-shop-content .panel-shop-game-wrapper .panel-shop-game .game.short:hover .game-name img {
        transition: 0.25s ease-out;
        filter: drop-shadow(0 0 1px #f90);
    }
    .panel-shop-content .panel-shop-game-wrapper .panel-shop-game .game.active .game-content::after {
        height: 100%;
        transition: 0.25s ease-out;
    }
    .panel-shop-content .panel-shop-game-wrapper .panel-shop-game .game.active .game-content::before {
        opacity: 1;
        filter: blur(0);
        transform: scale(1);
        transition: 0.25s ease-out;
    }
    .panel-shop-content .panel-shop-game-wrapper .panel-shop-game .game.active .game-content .game-name p {
        transition: 0.25s ease-out;
        color: #f90;
        text-shadow: 0 2px 0px rgba(0, 0, 0, 0.5);
    }
    .panel-shop-content .panel-shop-game-wrapper .panel-shop-game .game.active .game-content .game-name img {
        transition: 0.25s ease-out;
        filter: drop-shadow(0 0 1px #f90);
    }
    .panel-shop-content .panel-shop-game-wrapper .panel-shop-game .game-content {
        height: 450px;
        cursor: pointer;
        position: relative;
        display: flex;
        transition: 0.25s ease-out;
        box-shadow: 0 0 2px rgba(0, 0, 0, .3);
        justify-content: center;
    }
    .panel-shop-content .panel-shop-game-wrapper .panel-shop-game .game-content::before {
        position: absolute;
        height: 3px;
        bottom: -3px;
        left: 0;
        background: #f90;
        width: 100%;
        opacity: 0.25;
        filter: blur(2px);
        transform: scale(0);
        transition: 0.25s ease-out;
    }
    .panel-shop-content .panel-shop-game-wrapper .panel-shop-game .game-content::after {
        bottom: 0;
        background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 60%, #1d2027 85%, #1d2027 100%), linear-gradient(rgba(0, 0, 0, 0) 150px, #1d2027 95%, #1d2027 100%);
        width: 100%;
        position: absolute;
        z-index: 0;
        height: 300px;
        opacity: 1;
        transition: 0.25s ease-out;
    }
    @media screen and (max-width: 640px) {
        .panel-shop-content .panel-shop-game-wrapper .panel-shop-game .game-content {
            height: 70px;
        }
    }
    .panel-shop-content .panel-shop-game-wrapper .panel-shop-game .game:not(.short):hover .game-content::after {
        background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 60%, #f90 85%, #f90 100%), linear-gradient(rgba(0, 0, 0, 0) 150px, #f90 95%, #f90 100%);
        transition: 0.25s ease-out;
    }
    .panel-shop-content .panel-shop-game-wrapper .panel-shop-game .game:not(.short):hover .game-content .game-name {
        transition: 0.25s ease-out;
        transform: translateY(-15px);
    }
    .panel-shop-content .panel-shop-game-wrapper .panel-shop-game .game-name {
        position: absolute;
        bottom: 0;
        z-index: 1;
        padding: 15px 0;
        transform: translateY(0);
        transition: 0.25s ease-out;
    }
    .panel-shop-content .panel-shop-game-wrapper .panel-shop-game .game-name .release-date {
        font-weight: lighter;
        font-size: 13px;
        text-align: left;
        padding-bottom: 5px;
    }
    .panel-shop-content .panel-shop-game-wrapper .panel-shop-game .game-name img {
        transition: 0.25s ease-out;
        width: 50px;
    }
    .panel-shop-content .panel-shop-game-wrapper .panel-shop-game .game-name p {
        font-weight: bold;
        transition: 0.25s ease-out;
        color: #fff;
        text-align: center;
        margin: 0;
    }
    .panel-shop-content .panel-shop-game-wrapper .panel-shop-game .game-img {
        width: 100%;
        height: 100%;
    }
    .panel-shop-content .panel-shop-game-wrapper .panel-shop-game .game-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    @media screen and (max-width: 640px) {
        .panel-shop-content .panel-shop-game-wrapper .panel-shop-game .game .game-content {
            height: 70px;
            transition: 0.25s ease-out;
        }
        .panel-shop-content .panel-shop-game-wrapper .panel-shop-game .game .game-content::after {
            background: rgba(29, 32, 39, .80);
            height: 100%;
            transition: 0.25s ease-out;
        }
        .panel-shop-content .panel-shop-game-wrapper .panel-shop-game .game .game-content .game-name {
            bottom: inherit;
            padding: 0;
            height: 100%;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
        }
        .panel-shop-content .panel-shop-game-wrapper .panel-shop-game .game .game-content .game-name .release-date {
            display: none;
        }
    }
    .panel-shop-content .panel-shop-edition-wrapper {
        padding: 30px 0;
    }
    .panel-shop-content .panel-shop-edition-wrapper .panel-standalone-editions {
        padding-bottom: 30px;
    }
    .panel-shop-content .panel-shop-edition-wrapper .panel-dlc-editions {
        padding-bottom: 30px;
    }
    .panel-shop-content .panel-shop-edition-wrapper .step-label-container {
        padding-bottom: 30px;
    }
    .panel-shop-content .panel-shop-edition-wrapper .step-label-container .step-label {
        margin: 0;
        font-size: 1.5rem;
        color: #1d2027;
        font-weight: bold;
        padding-left: 15px;
        padding-top: 5px;
        padding-bottom: 5px;
        border-left: 3px solid #f90;
    }
    .panel-shop-content .panel-shop-edition-wrapper .standalone-separator {
        position: relative;
        display: flex;
    }
    @media screen and (max-width: 1024px) {
        .panel-shop-content .panel-shop-edition-wrapper .standalone-separator {
            justify-content: center;
        }
    }
    .panel-shop-content .panel-shop-edition-wrapper .dlc-separator {
        position: relative;
        display: flex;
    }
    @media screen and (max-width: 1024px) {
        .panel-shop-content .panel-shop-edition-wrapper .dlc-separator {
            justify-content: center;
        }
    }
    .panel-shop-content .panel-shop-edition-wrapper .separator-label {
        color: #1d2027;
        background: #fff;
        font-weight: lighter;
        font-size: 1.25rem;
        min-width: 200px;
        text-align: center;
        box-shadow: 0 0 2px rgba(0, 0, 0, 0.3);
        border-left: 3px solid #1d2027;
    }
    @media screen and (max-width: 1024px) {
        .panel-shop-content .panel-shop-edition-wrapper .separator-label {
            border: none;
            border-bottom: 3px solid #f90;
        }
    }
    .panel-shop-content .panel-shop-edition-wrapper .edition.short .btn-edition {
        height: 55px;
        transition: 0.25s ease-out;
    }
    .panel-shop-content .panel-shop-edition-wrapper .edition.short .edition-name {
        padding: 15px 0;
    }
    .panel-shop-content .panel-shop-edition-wrapper .edition.active .btn-edition::before {
        opacity: 1;
        filter: blur(0);
        transform: scale(1);
        transition: 0.25s ease-out;
    }
    .panel-shop-content .panel-shop-edition-wrapper .edition:hover .edition-name {
        transition: 0.25s ease-out;
        background: #f90;
    }
    .panel-shop-content .panel-shop-edition-wrapper .edition .btn-edition {
        height: 450px;
        cursor: pointer;
        position: relative;
        display: flex;
        transition: 0.25s ease-out;
        box-shadow: 0 0 2px rgba(0, 0, 0, .3);
        justify-content: center;
        background: #fff;
    }
    .panel-shop-content .panel-shop-edition-wrapper .edition .btn-edition::before {
        content: &#34;
        &#34;
    ;
        position: absolute;
        height: 3px;
        bottom: -3px;
        left: 0;
        background: #f90;
        width: 100%;
        opacity: 0.25;
        filter: blur(2px);
        transform: scale(0);
        transition: 0.25s ease-out;
    }
    .panel-shop-content .panel-shop-edition-wrapper .edition-name {
        width: 100%;
        top: 0;
        margin: 0;
        z-index: 1;
        position: absolute;
        text-align: center;
        background: #1d2027;
        color: #fff;
        padding: 10px 0;
        font-weight: bold;
        transition: 0.25s ease-out;
    }
    .panel-shop-content .panel-shop-edition-wrapper .edition-name p {
        margin: 0;
    }
    .panel-shop-content .panel-shop-edition-wrapper .edition-img {
        width: 100%;
        height: 100%;
    }
    .panel-shop-content .panel-shop-edition-wrapper .edition-img img {
        width: 100%;
        height: 100%;
        padding-top: 45px;
    }
    @media screen and (max-width: 1200px) {
        .panel-shop-content .panel-shop-edition-wrapper .edition-img img {
            object-fit: cover;
        }
    }
    @media screen and (max-width: 1024px) {
        .panel-shop-content .panel-shop-edition-wrapper .edition {
            width: 50%;
        }
        .panel-shop-content .panel-shop-edition-wrapper .edition .btn-edition {
            height: 55px;
        }
        .panel-shop-content .panel-shop-edition-wrapper .edition .btn-edition .edition-name {
            padding: 15px 0;
        }
    }
    @media screen and (max-width: 600px) {
        .panel-shop-content .panel-shop-edition-wrapper .edition {
            width: 100%;
        }
    }
    @media screen and (max-width: 850px) {
        .panel-shop-content .panel-shop-form-wrapper .panel-shop-forms {
            width: 100%;
        }
    }
    .panel-shop-content .panel-shop-form-wrapper .step-label-container {
        padding-bottom: 30px;
    }
    .panel-shop-content .panel-shop-form-wrapper .step-label-container .step-label {
        margin: 0;
        font-size: 1.5rem;
        color: #1d2027;
        font-weight: bold;
        padding-left: 15px;
        padding-top: 5px;
        padding-bottom: 5px;
        border-left: 3px solid #f90;
    }
    .panel-shop-content .panel-shop-form-wrapper .panel-shop-platforms-wrapper {
        padding-bottom: 30px;
    }
    .panel-shop-content .panel-shop-form-wrapper .panel-shop-platforms-wrapper .btn-platform {
        box-shadow: 0 0 2px rgba(0, 0, 0, 0.3);
        padding: 7px;
        text-align: center;
        cursor: pointer;
        background: #1d2027;
        transition: 0.25s ease-out;
    }
    @media screen and (max-width: 1024px) {
        .panel-shop-content .panel-shop-form-wrapper .panel-shop-platforms-wrapper .btn-platform {
            margin: 10px 0;
        }
    }
    .panel-shop-content .panel-shop-form-wrapper .panel-shop-platforms-wrapper #ps4.active .btn-platform {
        background: #1583c5;
        transition: 0.25s ease-out;
    }
    .panel-shop-content .panel-shop-form-wrapper .panel-shop-platforms-wrapper #ps4:hover .btn-platform {
        background: #1583c5;
        transition: 0.25s ease-out;
    }
    .panel-shop-content .panel-shop-form-wrapper .panel-shop-platforms-wrapper #xone.active .btn-platform {
        background: #3daa4b;
        transition: 0.25s ease-out;
    }
    .panel-shop-content .panel-shop-form-wrapper .panel-shop-platforms-wrapper #xone:hover .btn-platform {
        background: #3daa4b;
        transition: 0.25s ease-out;
    }
    .panel-shop-content .panel-shop-form-wrapper .panel-shop-platforms-wrapper #pc.active .btn-platform {
        background: #808080;
        transition: 0.25s ease-out;
    }
    .panel-shop-content .panel-shop-form-wrapper .panel-shop-platforms-wrapper #pc:hover .btn-platform {
        background: #808080;
        transition: 0.25s ease-out;
    }
    .panel-shop-content .panel-shop-form-wrapper .panel-countries-wrapper {
        padding-bottom: 30px;
    }
    .panel-shop-content .panel-shop-form-wrapper .panel-countries-wrapper .dropdown-container {
        position: relative;
        box-shadow: 0 0 2px rgba(0, 0, 0, 0.3);
    }
    .panel-shop-content .panel-shop-form-wrapper .panel-countries-wrapper .dropdown-container .dropdown-current-value {
        width: 100%;
        cursor: pointer;
        background-color: #1d2027;
    }
    .panel-shop-content .panel-shop-form-wrapper .panel-countries-wrapper .dropdown-container .dropdown-current-value .dropdown-item-country {
        padding: 14px 16px;
    }
    .panel-shop-content .panel-shop-form-wrapper .panel-countries-wrapper .dropdown-container .dropdown-current-value .dropdown-item-country .dropdown-item-country-name {
        color: #fff;
        margin: 0;
    }
    .panel-shop-content .panel-shop-form-wrapper .panel-countries-wrapper .dropdown-container .dropdown-current-value .dropdown-item-country .dropdown-item-country-flag {
        position: absolute;
        left: 38px;
        top: 9px;
        bottom: 0;
        width: 35px;
    }
    .panel-shop-content .panel-shop-form-wrapper .panel-countries-wrapper .dropdown-container .dropdown-current-value .dropdown-arrow {
        position: absolute;
        right: 0;
        top: 0;
        width: 30px;
        height: 100%;
        background-color: #f90;
    }
    .panel-shop-content .panel-shop-form-wrapper .panel-retailers-wrapper {
        padding-bottom: 30px;
    }
    .panel-shop-content .panel-shop-form-wrapper .panel-retailers-wrapper .dropdown-container {
        position: relative;
        box-shadow: 0 0 2px rgba(0, 0, 0, 0.3);
    }
    .panel-shop-content .panel-shop-form-wrapper .panel-retailers-wrapper .dropdown-container .dropdown-current-value {
        width: 100%;
        cursor: pointer;
        background-color: #1d2027;
    }
    .panel-shop-content .panel-shop-form-wrapper .panel-retailers-wrapper .dropdown-container .dropdown-current-value .dropdown-item-retailer {
        padding: 14px 16px;
    }
    .panel-shop-content .panel-shop-form-wrapper .panel-retailers-wrapper .dropdown-container .dropdown-current-value .dropdown-item-retailer .dropdown-item-retailer-type {
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        text-align: center;
        vertical-align: middle;
        color: #222;
        padding: 15px 0;
        width: 50px;
        font-size: 10px;
        font-weight: 700;
        line-height: 20px;
        background: #fff;
    }
    .panel-shop-content .panel-shop-form-wrapper .panel-retailers-wrapper .dropdown-container .dropdown-current-value .dropdown-item-retailer .dropdown-item-retailer-type.digital {
        color: #008b23;
    }
    .panel-shop-content .panel-shop-form-wrapper .panel-retailers-wrapper .dropdown-container .dropdown-current-value .dropdown-item-retailer .dropdown-item-retailer-type.retail {
        color: #8b0023;
    }
    .panel-shop-content .panel-shop-form-wrapper .panel-retailers-wrapper .dropdown-container .dropdown-current-value .dropdown-item-retailer .dropdown-item-retailer-name {
        margin: 0;
        color: #fff;
        display: inline-block;
    }
    .panel-shop-content .panel-shop-form-wrapper .panel-retailers-wrapper .dropdown-container .dropdown-current-value .dropdown-arrow {
        position: absolute;
        right: 0;
        top: 0;
        width: 30px;
        height: 100%;
        background-color: #f90;
    }
    .panel-shop-content .panel-shop-form-wrapper .panel-buy-wrapper {
        padding-bottom: 30px;
    }
    .panel-shop-content .panel-shop-form-wrapper .panel-buy-wrapper .retailer-link {
        box-shadow: 0 0 2px rgba(0, 0, 0, 0.3);
        display: block;
        text-align: center;
        text-transform: uppercase;
        font-size: 18px;
        color: #fff;
        background-color: #9c0909;
        padding: 15px 20px;
        transition: all 0.25s;
    }
    .panel-shop-content .panel-shop-form-wrapper .panel-shop-packshot {
        text-align: center;
        padding: 10px;
    }
    @media screen and (max-width: 850px) {
        .panel-shop-content .panel-shop-form-wrapper .panel-shop-packshot {
            display: none;
        }
    }
    .panel-shop-content .panel-shop-form-wrapper .panel-shop-packshot-mobile {
        width: 100%;
        display: none;
    }
    @media screen and (max-width: 850px) {
        .panel-shop-content .panel-shop-form-wrapper .panel-shop-packshot-mobile {
            display: block;
        }
    }
    .panel-shop-content .panel-shop-form-wrapper .panel-shop-packshot #slider-viewer img {
        width: 80%;
    }
    .panel-shop-content .panel-shop-form-wrapper .panel-shop-packshot #slider-bullets {
        list-style: none;
        display: flex;
        margin: 10px 0 0 0;
    }
    .panel-shop-content .panel-shop-form-wrapper .panel-shop-packshot #slider-bullets .media-item {
        cursor: pointer;
    }
    .panel-shop-content .panel-shop-form-wrapper .panel-shop-packshot #slider-bullets .media-item img {
        width: 60%;
        margin: auto;
        border: 2px solid transparent;
        max-width: 300px;
    }
    .panel-shop-content .panel-shop-form-wrapper .panel-shop-packshot #slider-bullets .media-item img.current {
        border-bottom: 3px solid #f90;
    }
    @media screen and (max-width: 850px) {
        .panel-shop-content .panel-shop-form-wrapper .panel-shop-edition-description {
            display: none;
        }
    }
    .panel-shop-content .panel-shop-form-wrapper .panel-shop-edition-description-mobile {
        width: 100%;
        display: none;
    }
    @media screen and (max-width: 850px) {
        .panel-shop-content .panel-shop-form-wrapper .panel-shop-edition-description-mobile {
            display: block;
        }
    }
</style>
