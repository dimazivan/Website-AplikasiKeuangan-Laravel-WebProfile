<footer id="footer">
    <div class="pull-right">
        <span>
            <!-- Localization -->
            <a href="javascript:void(0)" onclick="lange('id');">
                ID
            </a>&nbsp;|
            <a href="javascript:void(0)" onclick="lange('en');">
                EN
            </a>&nbsp;
        </span>
        <span style="padding-left: 20px;">||</span>
        <span id="loadtime">This site load&nbsp;
            {{
            number_format((float)(microtime(true) - LARAVEL_START), 2, '.', '');
            }}
            &nbsp;seconds to render</span>
        <span style="padding-left: 20px;">||</span>
        <span id="time">Loading time...</span>
        <span style="padding-left: 20px;">||</span>
        <span disabled>
            Dark Mode
        </span>
        <input type="checkbox" class="js-switch" id="switch" onchange="darkModeAdm(this)" />&nbsp;
        ||&nbsp; Dimaz Ivan Perdana -<a href="https://linktr.ee/dimazivan">&nbsp;Developer</a>
    </div>
    <div class="clearfix"></div>
</footer>