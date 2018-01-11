<?php

/* default/index.html.twig */
class __TwigTemplate_fd14cdec75d3a1dfa5815bb45e5a90ccbe4d323af1dbe01648f0f876b0c18bb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_994a4e9f9b02dc08c8a6a55d6bbec3d6803959c3e90ed994e06ea827d1973d7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_994a4e9f9b02dc08c8a6a55d6bbec3d6803959c3e90ed994e06ea827d1973d7a->enter($__internal_994a4e9f9b02dc08c8a6a55d6bbec3d6803959c3e90ed994e06ea827d1973d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_d69dfbce9a7282fc0f2bff8ed63c482db9ec7f606135d7cd8135679714f105aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d69dfbce9a7282fc0f2bff8ed63c482db9ec7f606135d7cd8135679714f105aa->enter($__internal_d69dfbce9a7282fc0f2bff8ed63c482db9ec7f606135d7cd8135679714f105aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_994a4e9f9b02dc08c8a6a55d6bbec3d6803959c3e90ed994e06ea827d1973d7a->leave($__internal_994a4e9f9b02dc08c8a6a55d6bbec3d6803959c3e90ed994e06ea827d1973d7a_prof);

        
        $__internal_d69dfbce9a7282fc0f2bff8ed63c482db9ec7f606135d7cd8135679714f105aa->leave($__internal_d69dfbce9a7282fc0f2bff8ed63c482db9ec7f606135d7cd8135679714f105aa_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a2d33a5f70c23f6894e4f8803ca59c037392a8c8914e1f4372f7d06eccc9713e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2d33a5f70c23f6894e4f8803ca59c037392a8c8914e1f4372f7d06eccc9713e->enter($__internal_a2d33a5f70c23f6894e4f8803ca59c037392a8c8914e1f4372f7d06eccc9713e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b37d737fca8bdd7242574b0b0974d0238a0cf1056247df94e83525d59a5e1ded = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b37d737fca8bdd7242574b0b0974d0238a0cf1056247df94e83525d59a5e1ded->enter($__internal_b37d737fca8bdd7242574b0b0974d0238a0cf1056247df94e83525d59a5e1ded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b37d737fca8bdd7242574b0b0974d0238a0cf1056247df94e83525d59a5e1ded->leave($__internal_b37d737fca8bdd7242574b0b0974d0238a0cf1056247df94e83525d59a5e1ded_prof);

        
        $__internal_a2d33a5f70c23f6894e4f8803ca59c037392a8c8914e1f4372f7d06eccc9713e->leave($__internal_a2d33a5f70c23f6894e4f8803ca59c037392a8c8914e1f4372f7d06eccc9713e_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
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
", "default/index.html.twig", "C:\\Apache24\\htdocs\\app\\Resources\\views\\default\\index.html.twig");
    }
}
