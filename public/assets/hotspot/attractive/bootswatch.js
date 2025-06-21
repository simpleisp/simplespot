<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Themes <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#" data-theme="default" class="theme-link">Default</a></li>
                <li><a href="#" data-theme="amelia" class="theme-link">Amelia</a></li>
                <li><a href="#" data-theme="cerulean" class="theme-link">Cerulean</a></li>
                <li><a href="#" data-theme="cosmo" class="theme-link">Cosmo</a></li>
                <li><a href="#" data-theme="cyborg" class="theme-link">Cyborg</a></li>
                <li><a href="#" data-theme="flatly" class="theme-link">Flatly</a></li>
                <li><a href="#" data-theme="journal" class="theme-link">Journal</a></li>
                <li><a href="#" data-theme="readable" class="theme-link">Readable</a></li>
                <li><a href="#" data-theme="simplex" class="theme-link">Simplex</a></li>
                 <li><a href="#" data-theme="slate" class="theme-link">Slate</a></li>
                 <li><a href="#" data-theme="spacelab" class="theme-link">Spacelab</a></li>
                 <li><a href="#" data-theme="spacelab" class="theme-link">Superhero</a></li>
                  <li><a href="#" data-theme="united" class="theme-link">United</a></li>
              </ul>
            </li>

var themes = {
        "default": "//netdna.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css",
        "amelia" : "//bootswatch.com/amelia/bootstrap.min.css",
        "cerulean" : "//bootswatch.com/cerulean/bootstrap.min.css",
        "cosmo" : "//bootswatch.com/cosmo/bootstrap.min.css",
        "cyborg" : "//bootswatch.com/cyborg/bootstrap.min.css",
        "flatly" : "//bootswatch.com/flatly/bootstrap.min.css",
        "journal" : "//bootswatch.com/journal/bootstrap.min.css",
        "readable" : "//bootswatch.com/readable/bootstrap.min.css",
        "simplex" : "//bootswatch.com/simplex/bootstrap.min.css",
        "slate" : "//bootswatch.com/slate/bootstrap.min.css",
        "spacelab" : "//bootswatch.com/spacelab/bootstrap.min.css",
        "superhero" : "//bootswatch.com/superhero/bootstrap.min.css",
        "united" : "//bootswatch.com/united/bootstrap.min.css"
    }
    $(function(){
    var themesheet = $('<link href="'+themes['default']+'" rel="stylesheet" />');
        themesheet.appendTo('head');
        $('.theme-link').click(function(){
        var themeurl = themes[$(this).attr('data-theme')]; 
            themesheet.attr('href',themeurl);
        });
    });