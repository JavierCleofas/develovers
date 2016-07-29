<div class="uk-grid uk-grid-divider uk-form uk-form-horizontal" data-uk-grid-margin>
    <div class="uk-width-medium-1-4">

        <div class="wk-panel-marginless">
            <ul class="uk-nav uk-nav-side" data-uk-switcher="{connect:'#nav-content'}">
                <li><a href="">{{'Layout' | trans}}</a></li>
                <li><a href="">{{'Media' | trans}}</a></li>
                <li><a href="">{{'Content' | trans}}</a></li>
                <li><a href="">{{'General' | trans}}</a></li>
            </ul>
        </div>

    </div>
    <div class="uk-width-medium-3-4">

        <ul id="nav-content" class="uk-switcher">
            <li>

                <h3 class="wk-form-heading">{{'Grid' | trans}}</h3>

                <div class="uk-form-row">
                    <span class="uk-form-label">{{'Horizontal Gutter' | trans}}</span>
                    <div class="uk-form-controls uk-form-controls-text">
                        <label><input type="checkbox" ng-model="widget.data['gutter']"> {{'Show the grid gutter' | trans}}</label>
                    </div>
                </div>

                <div class="uk-form-row">
                    <label class="uk-form-label" for="wk-gutter-vertical">{{'Vertical Gutter' | trans}}</label>
                    <div class="uk-form-controls">
                        <select id="wk-gutter-vertical" class="uk-form-width-medium" ng-model="widget.data['gutter_vertical']">
                            <option value="default">{{'Same as horizontal' | trans}}</option>
                            <option value="collapse">{{'Collapse' | trans}}</option>
                            <option value="large">{{'Large' | trans}}</option>
                        </select>
                    </div>
                </div>

                <div class="uk-form-row">
                    <span class="uk-form-label">{{'Divider' | trans}}</span>
                    <div class="uk-form-controls uk-form-controls-text">
                        <label><input type="checkbox" ng-model="widget.data['divider']"> {{'Show horizontal dividers' | trans}}</label>
                    </div>
                </div>

                <div class="uk-form-row">
                    <span class="uk-form-label">{{'Layout' | trans}}</span>
                    <div class="uk-form-controls uk-form-controls-text">
                        <label><input type="checkbox" ng-model="widget.data['invert']"> {{'Switch Item Ordering' | trans}}</label>
                    </div>
                </div>

                <h3 class="wk-form-heading">{{'Items' | trans}}</h3>

                <div class="uk-form-row">
                    <label class="uk-form-label" for="wk-panel">{{'Panel' | trans}}</label>
                    <div class="uk-form-controls">
                        <select id="wk-panel" class="uk-form-width-medium" ng-model="widget.data['panel']">
                            <option value="blank">{{'Blank' | trans}}</option>
                            <option value="box">{{'Box' | trans}}</option>
                            <option value="primary">{{'Box Primary' | trans}}</option>
                            <option value="secondary">{{'Box Secondary' | trans}}</option>
                            <option value="hover">{{'Hover' | trans}}</option>
                            <option value="header">{{'Header' | trans}}</option>
                            <option value="space">{{'Space' | trans}}</option>
                        </select>
                        <p class="uk-form-controls-condensed">
                            <label><input type="checkbox" ng-model="widget.data['panel_space']"> {{'Add whitespace to your content' | trans}}</label>
                        </p>
                    </div>
                </div>

                <div class="uk-form-row">
                    <label class="uk-form-label" for="wk-animation-media">{{'Animation Media' | trans}}</label>
                    <div class="uk-form-controls">
                        <select id="wk-animation-media" class="uk-form-width-medium" ng-model="widget.data['animation_media']">
                            <option value="none">{{'None' | trans}}</option>
                            <option value="fade">{{'Fade' | trans}}</option>
                            <option value="slide">{{'Slide' | trans}}</option>
                        </select>
                    </div>
                </div>

                <div class="uk-form-row">
                    <label class="uk-form-label" for="wk-animation-content">{{'Animation Content' | trans}}</label>
                    <div class="uk-form-controls">
                        <select id="wk-animation-content" class="uk-form-width-medium" ng-model="widget.data['animation_content']">
                            <option value="none">{{'None' | trans}}</option>
                            <option value="fade">{{'Fade' | trans}}</option>
                            <option value="slide">{{'Slide' | trans}}</option>
                        </select>
                    </div>
                </div>

            </li>
            <li>

                <h3 class="wk-form-heading">{{'Media' | trans}}</h3>

                <div class="uk-form-row">
                    <label class="uk-form-label">{{'Image' | trans}}</label>
                    <div class="uk-form-controls">
                        <label><input class="uk-form-width-small" type="text" ng-model="widget.data['image_width']"> {{'Width (px)' | trans}}</label>
                        <p class="uk-form-controls-condensed">
                            <label><input class="uk-form-width-small" type="text" ng-model="widget.data['image_height']"> {{'Height (px)' | trans}}</label>
                        </p>
                    </div>
                </div>

                <h3 class="wk-form-heading">{{'Media 2' | trans}}</h3>

                <div class="uk-form-row">
                    <label class="uk-form-label">{{'Image' | trans}}</label>
                    <div class="uk-form-controls">
                        <label><input class="uk-form-width-small" type="text" ng-model="widget.data['image2_width']"> {{'Width (px)' | trans}}</label>
                        <p class="uk-form-controls-condensed">
                            <label><input class="uk-form-width-small" type="text" ng-model="widget.data['image2_height']"> {{'Height (px)' | trans}}</label>
                        </p>
                    </div>
                </div>

                <h3 class="wk-form-heading">{{'Overlay' | trans}}</h3>

                <div class="uk-form-row">
                    <span class="uk-form-label">{{'Overlay' | trans}}</span>
                    <div class="uk-form-controls uk-form-controls-text">
                        <label><input type="checkbox" ng-model="widget.data['media_overlay']"> {{'Enable Overlay' | trans}} ({{'If overlay field exists' | trans}})</label>
                    </div>
                </div>

                <div class="uk-form-row" ng-if="widget.data.media_overlay">
                    <span class="uk-form-label">{{'Background' | trans}}</span>
                    <div class="uk-form-controls uk-form-controls-text">
                        <label><input type="checkbox" ng-model="widget.data['overlay_background']"> {{'Enable Overlay Background' | trans}}</label>
                    </div>
                </div>

                <div class="uk-form-row" ng-if="widget.data.media_overlay">
                    <label class="uk-form-label" for="wk-overlay-link">{{'Link' | trans}}</label>
                    <div class="uk-form-controls">
                        <select id="wk-overlay-link" class="uk-form-width-medium" ng-model="widget.data['overlay_link']">
                            <option value="lightbox">{{'Lightbox' | trans}}</option>
                            <option value="link">{{'Use Link' | trans}}</option>
                        </select>
                    </div>
                </div>

                <div class="uk-form-row" ng-if="widget.data.media_overlay">
                    <label class="uk-form-label" for="wk-overlay-animation">{{'Overlay Animation' | trans}}</label>
                    <div class="uk-form-controls">
                        <select id="wk-overlay-animation" class="uk-form-width-medium" ng-model="widget.data['overlay_animation']">
                            <option value="fade">{{'Fade' | trans}}</option>
                            <option value="slide-top">{{'Slide Top' | trans}}</option>
                            <option value="slide-bottom">{{'Slide Bottom' | trans}}</option>
                            <option value="slide-left">{{'Slide Left' | trans}}</option>
                            <option value="slide-right">{{'Slide Right' | trans}}</option>
                        </select>
                    </div>
                </div>

                <div class="uk-form-row" ng-if="widget.data.media_overlay">
                    <label class="uk-form-label" for="wk-thumbnail-animation">{{'Image Animation' | trans}}</label>
                    <div class="uk-form-controls">
                        <select id="wk-thumbnail-animation" class="uk-form-width-medium" ng-model="widget.data['media_animation']">
                            <option value="none">{{'None' | trans}}</option>
                            <option value="fade">{{'Fade' | trans}}</option>
                            <option value="scale">{{'Scale' | trans}}</option>
                            <option value="spin">{{'Spin' | trans}}</option>
                            <option value="grayscale">{{'Grayscale' | trans}}</option>
                        </select>
                    </div>
                </div>


            </li>
            <li>

                <h3 class="wk-form-heading">{{'Text' | trans}}</h3>

                <div class="uk-form-row">
                    <span class="uk-form-label">{{'Display' | trans}}</span>
                    <div class="uk-form-controls uk-form-controls-text">
                        <p class="uk-form-controls-condensed">
                            <label><input type="checkbox" ng-model="widget.data['title']"> {{'Show title' | trans}}</label>
                        </p>
                        <p class="uk-form-controls-condensed">
                            <label><input type="checkbox" ng-model="widget.data['content']"> {{'Show content' | trans}}</label>
                        </p>
                    </div>
                </div>

                <h3 class="wk-form-heading">{{'Link' | trans}}</h3>

                <div class="uk-form-row">
                    <span class="uk-form-label">{{'Display' | trans}}</span>
                    <div class="uk-form-controls uk-form-controls-text">
                        <label><input type="checkbox" ng-model="widget.data['link']"> {{'Link Title' | trans}}</label>
                    </div>
                </div>

            </li>
            <li>

                <h3 class="wk-form-heading">{{'Custom' | trans}}</h3>

                <div class="uk-form-row">
                    <label class="uk-form-label" for="wk-class">{{'HTML Class' | trans}}</label>
                    <div class="uk-form-controls">
                        <input id="wk-class" class="uk-form-width-medium" type="text" ng-model="widget.data['class']">
                    </div>
                </div>

            </li>
        </ul>

    </div>
</div>