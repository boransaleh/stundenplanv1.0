<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_560b56b507b9eb6bf045d299afccadc5474046f27ccd66f607f48613eb8ddb1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5db24cf8202012feeb549f8c5eb376f8bb2843df7b7d70e8242dd1aeac1a55b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5db24cf8202012feeb549f8c5eb376f8bb2843df7b7d70e8242dd1aeac1a55b0->enter($__internal_5db24cf8202012feeb549f8c5eb376f8bb2843df7b7d70e8242dd1aeac1a55b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_f755df056fd6718edfb11cc514555bc926b973e7845ae92b0ee524234702bd92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f755df056fd6718edfb11cc514555bc926b973e7845ae92b0ee524234702bd92->enter($__internal_f755df056fd6718edfb11cc514555bc926b973e7845ae92b0ee524234702bd92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_5db24cf8202012feeb549f8c5eb376f8bb2843df7b7d70e8242dd1aeac1a55b0->leave($__internal_5db24cf8202012feeb549f8c5eb376f8bb2843df7b7d70e8242dd1aeac1a55b0_prof);

        
        $__internal_f755df056fd6718edfb11cc514555bc926b973e7845ae92b0ee524234702bd92->leave($__internal_f755df056fd6718edfb11cc514555bc926b973e7845ae92b0ee524234702bd92_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f794a678418f48f935db2398986ce2ef2a3504be476d8051aafe3fd681b65092 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f794a678418f48f935db2398986ce2ef2a3504be476d8051aafe3fd681b65092->enter($__internal_f794a678418f48f935db2398986ce2ef2a3504be476d8051aafe3fd681b65092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6ef9380e5c45ab1ff29f07043654cd98c3366a3b5fa2825a2c9787401d79efa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ef9380e5c45ab1ff29f07043654cd98c3366a3b5fa2825a2c9787401d79efa4->enter($__internal_6ef9380e5c45ab1ff29f07043654cd98c3366a3b5fa2825a2c9787401d79efa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6ef9380e5c45ab1ff29f07043654cd98c3366a3b5fa2825a2c9787401d79efa4->leave($__internal_6ef9380e5c45ab1ff29f07043654cd98c3366a3b5fa2825a2c9787401d79efa4_prof);

        
        $__internal_f794a678418f48f935db2398986ce2ef2a3504be476d8051aafe3fd681b65092->leave($__internal_f794a678418f48f935db2398986ce2ef2a3504be476d8051aafe3fd681b65092_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_b3af86a91863dd9bbebc51017dbb24e3ab64e8731f582b174dbca552d6f8a9e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3af86a91863dd9bbebc51017dbb24e3ab64e8731f582b174dbca552d6f8a9e7->enter($__internal_b3af86a91863dd9bbebc51017dbb24e3ab64e8731f582b174dbca552d6f8a9e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c52c494e440cf42de6533fdfa331fd364e7ed5dec3a8a74475ab09acff46a98c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c52c494e440cf42de6533fdfa331fd364e7ed5dec3a8a74475ab09acff46a98c->enter($__internal_c52c494e440cf42de6533fdfa331fd364e7ed5dec3a8a74475ab09acff46a98c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_c52c494e440cf42de6533fdfa331fd364e7ed5dec3a8a74475ab09acff46a98c->leave($__internal_c52c494e440cf42de6533fdfa331fd364e7ed5dec3a8a74475ab09acff46a98c_prof);

        
        $__internal_b3af86a91863dd9bbebc51017dbb24e3ab64e8731f582b174dbca552d6f8a9e7->leave($__internal_b3af86a91863dd9bbebc51017dbb24e3ab64e8731f582b174dbca552d6f8a9e7_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_73b494be04448a0842d5a18348fb7a2ed258d7d19fa667029171e4fed3d3e6ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73b494be04448a0842d5a18348fb7a2ed258d7d19fa667029171e4fed3d3e6ed->enter($__internal_73b494be04448a0842d5a18348fb7a2ed258d7d19fa667029171e4fed3d3e6ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ca36059415fd75470580640f817db3d6889fb149e6cd55b477287bae1052b374 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca36059415fd75470580640f817db3d6889fb149e6cd55b477287bae1052b374->enter($__internal_ca36059415fd75470580640f817db3d6889fb149e6cd55b477287bae1052b374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ca36059415fd75470580640f817db3d6889fb149e6cd55b477287bae1052b374->leave($__internal_ca36059415fd75470580640f817db3d6889fb149e6cd55b477287bae1052b374_prof);

        
        $__internal_73b494be04448a0842d5a18348fb7a2ed258d7d19fa667029171e4fed3d3e6ed->leave($__internal_73b494be04448a0842d5a18348fb7a2ed258d7d19fa667029171e4fed3d3e6ed_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "TwigBundle::layout.html.twig", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/layout.html.twig");
    }
}
