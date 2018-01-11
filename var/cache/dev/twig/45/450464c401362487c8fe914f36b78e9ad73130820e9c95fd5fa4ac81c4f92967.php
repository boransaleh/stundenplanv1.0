<?php

/* :default:index.html.twig */
class __TwigTemplate_f0040b6e45cefda40a217a74d3137e72389e8caaa6194c649fddec8881d53a74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8ead9ba94fe98f71554d8dfac0c97c0fd81740eb90c4db591b6d52bffc877eb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ead9ba94fe98f71554d8dfac0c97c0fd81740eb90c4db591b6d52bffc877eb3->enter($__internal_8ead9ba94fe98f71554d8dfac0c97c0fd81740eb90c4db591b6d52bffc877eb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $__internal_550dbbfb300471837f14e5cf7eef554d947cad810aebc3ee5072f3db9c83ad6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_550dbbfb300471837f14e5cf7eef554d947cad810aebc3ee5072f3db9c83ad6c->enter($__internal_550dbbfb300471837f14e5cf7eef554d947cad810aebc3ee5072f3db9c83ad6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ead9ba94fe98f71554d8dfac0c97c0fd81740eb90c4db591b6d52bffc877eb3->leave($__internal_8ead9ba94fe98f71554d8dfac0c97c0fd81740eb90c4db591b6d52bffc877eb3_prof);

        
        $__internal_550dbbfb300471837f14e5cf7eef554d947cad810aebc3ee5072f3db9c83ad6c->leave($__internal_550dbbfb300471837f14e5cf7eef554d947cad810aebc3ee5072f3db9c83ad6c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd674baacd2b441627ff72d7d43c4cb7317019c50fcf148a3396c742a104b901 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd674baacd2b441627ff72d7d43c4cb7317019c50fcf148a3396c742a104b901->enter($__internal_cd674baacd2b441627ff72d7d43c4cb7317019c50fcf148a3396c742a104b901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4b420ba3920c4bacb495d46316475c76feb7c4628f9de5de69247e8f8e73d437 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b420ba3920c4bacb495d46316475c76feb7c4628f9de5de69247e8f8e73d437->enter($__internal_4b420ba3920c4bacb495d46316475c76feb7c4628f9de5de69247e8f8e73d437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        echo $this->env->getExtension('fadosProduccions\fullCalendarBundle\Twig\fullCalendarExtension')->fullCalendar();
        echo "
    <div class=\"modal\" id=\"pleaseWaitDialog\" data-backdrop=\"static\" data-keyboard=\"false\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">Processing...</h5>
                </div>
                <div class=\"modal-body\">

                    <div class=\"progress\">
                        <div class=\"progress-bar progress-bar-striped progress-bar-animated active\" role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 100%\"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">New message</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["addeventForm"] ?? $this->getContext($context, "addeventForm")), 'form_start', array("attr" => array("id" => "addevent")));
        echo "
                <div class=\"modal-body\">

                    <div class=\"form-group\" style=\"display: none;\">
                        <input type=\"text\" id=\"start\" />
                        <input type=\"text\" id=\"end\" />

                    </div>

                    <div class=\"form-group\">
                    ";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["addeventForm"] ?? $this->getContext($context, "addeventForm")), "EinzelFach", array()), 'row', array("id" => "einfach"));
        echo "
                    </div>
                    <div class=\"form-group\">
                    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["addeventForm"] ?? $this->getContext($context, "addeventForm")), "Dozent", array()), 'row');
        echo "
                    </div>
                    <div class=\"form-group\">
                    ";
        // line 48
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["addeventForm"] ?? $this->getContext($context, "addeventForm")), "SchuleGroup", array()), 'row');
        echo "
                    </div>
                    <hr>

                    <div class=\"form-group\">

                    <button type=\"button\" id=\"praktikum\" class=\"btn btn-block btn-warning \" aria-label=\"Left Align\">
                        <span class=\"glyphicon glyphicon-align-left\" aria-hidden=\"true\"> Praktikum </span>
                    </button>
                    </div>

                    <div class=\"form-group\">

                        <button type=\"button\" id=\"urlaub\" class=\"btn btn-block btn-success \" aria-label=\"Left Align\">
                            <span class=\"glyphicon glyphicon-align-left\" aria-hidden=\"true\"> Urlaub </span>
                        </button>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                    <input type=\"submit\" id=\"hinzufügen\" class=\"btn btn-primary\">
                </div>
                ";
        // line 70
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["addeventForm"] ?? $this->getContext($context, "addeventForm")), 'form_end');
        echo "


            </div>
        </div>


    </div>

";
        
        $__internal_4b420ba3920c4bacb495d46316475c76feb7c4628f9de5de69247e8f8e73d437->leave($__internal_4b420ba3920c4bacb495d46316475c76feb7c4628f9de5de69247e8f8e73d437_prof);

        
        $__internal_cd674baacd2b441627ff72d7d43c4cb7317019c50fcf148a3396c742a104b901->leave($__internal_cd674baacd2b441627ff72d7d43c4cb7317019c50fcf148a3396c742a104b901_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 70,  106 => 48,  100 => 45,  94 => 42,  81 => 32,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    {{ fullCalendar() }}
    <div class=\"modal\" id=\"pleaseWaitDialog\" data-backdrop=\"static\" data-keyboard=\"false\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">Processing...</h5>
                </div>
                <div class=\"modal-body\">

                    <div class=\"progress\">
                        <div class=\"progress-bar progress-bar-striped progress-bar-animated active\" role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 100%\"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">New message</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                {{ form_start(addeventForm, {'attr': {'id': 'addevent'}}) }}
                <div class=\"modal-body\">

                    <div class=\"form-group\" style=\"display: none;\">
                        <input type=\"text\" id=\"start\" />
                        <input type=\"text\" id=\"end\" />

                    </div>

                    <div class=\"form-group\">
                    {{ form_row(addeventForm.EinzelFach,{'id' : 'einfach'}) }}
                    </div>
                    <div class=\"form-group\">
                    {{ form_row(addeventForm.Dozent) }}
                    </div>
                    <div class=\"form-group\">
                    {{ form_row(addeventForm.SchuleGroup) }}
                    </div>
                    <hr>

                    <div class=\"form-group\">

                    <button type=\"button\" id=\"praktikum\" class=\"btn btn-block btn-warning \" aria-label=\"Left Align\">
                        <span class=\"glyphicon glyphicon-align-left\" aria-hidden=\"true\"> Praktikum </span>
                    </button>
                    </div>

                    <div class=\"form-group\">

                        <button type=\"button\" id=\"urlaub\" class=\"btn btn-block btn-success \" aria-label=\"Left Align\">
                            <span class=\"glyphicon glyphicon-align-left\" aria-hidden=\"true\"> Urlaub </span>
                        </button>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                    <input type=\"submit\" id=\"hinzufügen\" class=\"btn btn-primary\">
                </div>
                {{ form_end(addeventForm) }}


            </div>
        </div>


    </div>

{% endblock %}
", ":default:index.html.twig", "C:\\Apache24\\htdocs\\app/Resources\\views/default/index.html.twig");
    }
}
