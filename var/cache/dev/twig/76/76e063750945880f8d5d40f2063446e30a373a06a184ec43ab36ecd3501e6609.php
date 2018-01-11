<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_af75752751fcfb0c5c2f3cb8680f52970ea378d8099f2a137a20b99c83ad2d9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_44aeab29cf88c79ac635b2531e6da48d69c266451c5f6c539b6d6484f1c35776 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44aeab29cf88c79ac635b2531e6da48d69c266451c5f6c539b6d6484f1c35776->enter($__internal_44aeab29cf88c79ac635b2531e6da48d69c266451c5f6c539b6d6484f1c35776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_cb8470dc96ed8d6c34ba84a263dc1c1112af11d09090620b731a33f37207544d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb8470dc96ed8d6c34ba84a263dc1c1112af11d09090620b731a33f37207544d->enter($__internal_cb8470dc96ed8d6c34ba84a263dc1c1112af11d09090620b731a33f37207544d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44aeab29cf88c79ac635b2531e6da48d69c266451c5f6c539b6d6484f1c35776->leave($__internal_44aeab29cf88c79ac635b2531e6da48d69c266451c5f6c539b6d6484f1c35776_prof);

        
        $__internal_cb8470dc96ed8d6c34ba84a263dc1c1112af11d09090620b731a33f37207544d->leave($__internal_cb8470dc96ed8d6c34ba84a263dc1c1112af11d09090620b731a33f37207544d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_059535c293859b744f1c00f95c6659d131cfe096675f57aba502f3e842300d9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_059535c293859b744f1c00f95c6659d131cfe096675f57aba502f3e842300d9a->enter($__internal_059535c293859b744f1c00f95c6659d131cfe096675f57aba502f3e842300d9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_68d13d2f5ad3c1813bc641286de43d15f0a7dd4233f63bfb4f30b7ea72eff646 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68d13d2f5ad3c1813bc641286de43d15f0a7dd4233f63bfb4f30b7ea72eff646->enter($__internal_68d13d2f5ad3c1813bc641286de43d15f0a7dd4233f63bfb4f30b7ea72eff646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_68d13d2f5ad3c1813bc641286de43d15f0a7dd4233f63bfb4f30b7ea72eff646->leave($__internal_68d13d2f5ad3c1813bc641286de43d15f0a7dd4233f63bfb4f30b7ea72eff646_prof);

        
        $__internal_059535c293859b744f1c00f95c6659d131cfe096675f57aba502f3e842300d9a->leave($__internal_059535c293859b744f1c00f95c6659d131cfe096675f57aba502f3e842300d9a_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_60303d7a6f3e98798cafd15baa5d3991d61ff1347c2f040d4c2ace5e95da5ecb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60303d7a6f3e98798cafd15baa5d3991d61ff1347c2f040d4c2ace5e95da5ecb->enter($__internal_60303d7a6f3e98798cafd15baa5d3991d61ff1347c2f040d4c2ace5e95da5ecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3b979f76dc32e7e8e8ad1b5d0f37362ded630150f93c9e1f147f30c500097daa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b979f76dc32e7e8e8ad1b5d0f37362ded630150f93c9e1f147f30c500097daa->enter($__internal_3b979f76dc32e7e8e8ad1b5d0f37362ded630150f93c9e1f147f30c500097daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3b979f76dc32e7e8e8ad1b5d0f37362ded630150f93c9e1f147f30c500097daa->leave($__internal_3b979f76dc32e7e8e8ad1b5d0f37362ded630150f93c9e1f147f30c500097daa_prof);

        
        $__internal_60303d7a6f3e98798cafd15baa5d3991d61ff1347c2f040d4c2ace5e95da5ecb->leave($__internal_60303d7a6f3e98798cafd15baa5d3991d61ff1347c2f040d4c2ace5e95da5ecb_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_6afec833d912d070966fafd3ccf51467d6d6182c63a16abce6abf123b9f22ca4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6afec833d912d070966fafd3ccf51467d6d6182c63a16abce6abf123b9f22ca4->enter($__internal_6afec833d912d070966fafd3ccf51467d6d6182c63a16abce6abf123b9f22ca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1c1fd1822f3fbae41a281c92339ffda9c923f5821165acef35612028920b7a1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c1fd1822f3fbae41a281c92339ffda9c923f5821165acef35612028920b7a1c->enter($__internal_1c1fd1822f3fbae41a281c92339ffda9c923f5821165acef35612028920b7a1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_1c1fd1822f3fbae41a281c92339ffda9c923f5821165acef35612028920b7a1c->leave($__internal_1c1fd1822f3fbae41a281c92339ffda9c923f5821165acef35612028920b7a1c_prof);

        
        $__internal_6afec833d912d070966fafd3ccf51467d6d6182c63a16abce6abf123b9f22ca4->leave($__internal_6afec833d912d070966fafd3ccf51467d6d6182c63a16abce6abf123b9f22ca4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
