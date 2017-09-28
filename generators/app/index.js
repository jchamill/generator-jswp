'use strict';
const Generator = require('yeoman-generator');
const chalk = require('chalk');
const yosay = require('yosay');

module.exports = class extends Generator {
  prompting() {
    // Have Yeoman greet the user.
    this.log(yosay(
      'Let me help you generate the ' + chalk.red('JS Wordpress Theme') + '!'
    ));

    const prompts = [
      {
        type: 'input',
        name: 'themeName',
        message: 'Theme name'
      },
      {
        type: 'input',
        name: 'themeKey',
        message: 'Theme key'
      },
      {
        type: 'input',
        name: 'themeDescription',
        message: 'Theme description'
      },
      {
        type: 'input',
        name: 'themeUri',
        message: 'Theme URI'
      }
    ];

    return this.prompt(prompts).then(props => {
      // To access props later use this.props.themeName;
      this.props = props;
    });
  }

  writing() {
    this.fs.copyTpl(
      this.templatePath('package.json'),
      this.destinationPath('package.json'), {
        themeName: this.props.themeName,
        themeKey: this.props.themeKey
      }
    );

    this.fs.copy(
      this.templatePath('Gruntfile.js'),
      this.destinationPath('Gruntfile.js')
    );

    this.fs.copy(
      this.templatePath('screenshot.png'),
      this.destinationPath('screenshot.png')
    );

    this.fs.copy(
      this.templatePath('sass/style.sass'),
      this.destinationPath('sass/style.sass')
    );

    this.fs.copy(
      this.templatePath('sass/modules/mixins.sass'),
      this.destinationPath('sass/modules/mixins.sass')
    );

    this.fs.copy(
      this.templatePath('sass/modules/variables.sass'),
      this.destinationPath('sass/modules/variables.sass')
    );

    this.fs.copy(
      this.templatePath('sass/partials/base.sass'),
      this.destinationPath('sass/partials/base.sass')
    );

    this.fs.copy(
      this.templatePath('sass/partials/buttons.sass'),
      this.destinationPath('sass/partials/buttons.sass')
    );

    this.fs.copy(
      this.templatePath('sass/partials/typography.sass'),
      this.destinationPath('sass/partials/typography.sass')
    );

    this.fs.copy(
      this.templatePath('sass/partials/forms.sass'),
      this.destinationPath('sass/partials/forms.sass')
    );

    this.fs.copy(
      this.templatePath('sass/partials/panels.sass'),
      this.destinationPath('sass/partials/panels.sass')
    );

    this.fs.copy(
      this.templatePath('sass/partials/header.sass'),
      this.destinationPath('sass/partials/header.sass')
    );

    this.fs.copy(
      this.templatePath('sass/partials/navigation.sass'),
      this.destinationPath('sass/partials/navigation.sass')
    );

    this.fs.copy(
      this.templatePath('sass/partials/footer.sass'),
      this.destinationPath('sass/partials/footer.sass')
    );

    this.fs.copy(
      this.templatePath('sass/partials/widgets.sass'),
      this.destinationPath('sass/partials/widgets.sass')
    );

    this.fs.copy(
      this.templatePath('sass/partials/classes.sass'),
      this.destinationPath('sass/partials/classes.sass')
    );

    this.fs.copy(
      this.templatePath('js/html5.js'),
      this.destinationPath('js/html5.js')
    );

    this.fs.copy(
      this.templatePath('js/skip-link-focus-fix.js'),
      this.destinationPath('js/skip-link-focus-fix.js')
    );

    this.fs.copy(
      this.templatePath('js/scripts.js'),
      this.destinationPath('js/scripts.js')
    );

    this.fs.copyTpl(
      this.templatePath('style.css'),
      this.destinationPath('style.css'), {
        themeName: this.props.themeName,
        themeKey: this.props.themeKey,
        themeDescription: this.props.themeDescription,
        themeUri: this.props.themeUri
      }
    );

    this.fs.copyTpl(
      this.templatePath('functions.php'),
      this.destinationPath('functions.php'), {
        themeKey: this.props.themeKey
      }
    );

    this.fs.copyTpl(
      this.templatePath('inc/template-tags.php'),
      this.destinationPath('inc/template-tags.php'), {
        themeName: this.props.themeName,
        themeKey: this.props.themeKey
      }
    );

    this.fs.copyTpl(
      this.templatePath('index.php'),
      this.destinationPath('index.php'), {
        themeKey: this.props.themeKey
      }
    );

    this.fs.copyTpl(
      this.templatePath('page.php'),
      this.destinationPath('page.php'), {
        themeKey: this.props.themeKey
      }
    );

    this.fs.copyTpl(
      this.templatePath('single.php'),
      this.destinationPath('single.php'), {
        themeKey: this.props.themeKey
      }
    );

    this.fs.copyTpl(
      this.templatePath('sidebar.php'),
      this.destinationPath('sidebar.php'), {
        themeKey: this.props.themeKey
      }
    );

    this.fs.copyTpl(
      this.templatePath('searchform.php'),
      this.destinationPath('searchform.php'), {
        themeKey: this.props.themeKey
      }
    );

    this.fs.copyTpl(
      this.templatePath('search.php'),
      this.destinationPath('search.php'), {
        themeKey: this.props.themeKey
      }
    );

    this.fs.copyTpl(
      this.templatePath('image.php'),
      this.destinationPath('image.php'), {
        themeKey: this.props.themeKey
      }
    );

    this.fs.copyTpl(
      this.templatePath('header.php'),
      this.destinationPath('header.php'), {
        themeKey: this.props.themeKey
      }
    );

    this.fs.copyTpl(
      this.templatePath('footer.php'),
      this.destinationPath('footer.php'), {
        themeName: this.props.themeName,
        themeKey: this.props.themeKey
      }
    );

    this.fs.copyTpl(
      this.templatePath('comments.php'),
      this.destinationPath('comments.php'), {
        themeKey: this.props.themeKey
      }
    );

    this.fs.copyTpl(
      this.templatePath('archive.php'),
      this.destinationPath('archive.php'), {
        themeKey: this.props.themeKey
      }
    );

    this.fs.copyTpl(
      this.templatePath('404.php'),
      this.destinationPath('404.php'), {
        themeKey: this.props.themeKey
      }
    );

    this.fs.copyTpl(
      this.templatePath('template-parts/content.php'),
      this.destinationPath('template-parts/content.php'), {
        themeKey: this.props.themeKey
      }
    );

    this.fs.copyTpl(
      this.templatePath('template-parts/content-none.php'),
      this.destinationPath('template-parts/content-none.php'), {
        themeKey: this.props.themeKey
      }
    );

    this.fs.copyTpl(
      this.templatePath('template-parts/content-page.php'),
      this.destinationPath('template-parts/content-page.php'), {
        themeKey: this.props.themeKey
      }
    );

    this.fs.copyTpl(
      this.templatePath('template-parts/content-search.php'),
      this.destinationPath('template-parts/content-search.php'), {
        themeKey: this.props.themeKey
      }
    );

    this.fs.copyTpl(
      this.templatePath('template-parts/content-single.php'),
      this.destinationPath('template-parts/content-single.php'), {
        themeKey: this.props.themeKey
      }
    );

  }

  install() {
    this.installDependencies();
  }
};
