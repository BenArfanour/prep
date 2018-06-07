<?php

/* ::Timesheet/dayclick.html.twig */
class __TwigTemplate_c951ec586e90c6da5591b2077777aa126439551d06e3c07f9397ab018031f330 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::Timesheet/dayclick.html.twig"));

        // line 1
        echo "
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>

";
        // line 5
        echo "
        ";
        // line 7
        echo "            ";
        // line 8
        echo "            ";
        // line 9
        echo "             ";
        // line 10
        echo "             ";
        // line 11
        echo "

        ";
        // line 14
        echo "
            ";
        // line 16
        echo "        ";
        // line 17
        echo "        ";
        // line 18
        echo "            ";
        // line 19
        echo "        ";
        // line 20
        echo "
    ";
        // line 22
        echo "
              ";
        // line 24
        echo "
              ";
        // line 26
        echo "
";
        // line 28
        echo "
<div id=\"calendarModal\" class=\"modal fade\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">×</span> <span class=\"sr-only\">close</span></button>
                <h4 id=\"modalTitle\" class=\"modal-title\"> Insérez :</h4>
            </div>
            <div id=\"modalBody\" class=\"modal-body\">

            ";
        // line 38
        echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->extensions['Symfony\Bridge\Twig\Extension\HttpKernelExtension']->controller("AppBundle:TimeSheet:new"), array());
        // line 39
        echo "
            </div>
            <div class=\"modal-footer\">

                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "::Timesheet/dayclick.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 39,  81 => 38,  69 => 28,  66 => 26,  63 => 24,  60 => 22,  57 => 20,  55 => 19,  53 => 18,  51 => 17,  49 => 16,  46 => 14,  42 => 11,  40 => 10,  38 => 9,  36 => 8,  34 => 7,  31 => 5,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>

{#<script>#}

        {#var update = function () {#}
            {#\$(\"#appbundle_timesheet_type_0\").is(\":checked\") ;#}
            {#var c1 = \$(\"#appbundle_timesheet_type_0\").prop(\"checked\", true);#}
             {#var c2 = \$(\"#appbundle_timesheet_type_0\").prop(\"checked\", true); ;#}
             {#var c3 = \$(\"#appbundle_timesheet_type_2\").is(\":checked\") ;#}


        {#if (c1 || c2 || c3) {#}

            {#\$(\"#appbundle_timesheet_sheeets\").attr(\"disabled\", \"disabled\");#}
        {#}#}
        {#else {#}
            {#\$(\"#appbundle_timesheet_sheeets\").attr(\"disabled\", false);#}
        {#}#}

    {#};#}

              {#\$(update);#}

              {#\$(\"#appbundle_timesheet_type\").change(update);#}

{#</script>#}

<div id=\"calendarModal\" class=\"modal fade\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">×</span> <span class=\"sr-only\">close</span></button>
                <h4 id=\"modalTitle\" class=\"modal-title\"> Insérez :</h4>
            </div>
            <div id=\"modalBody\" class=\"modal-body\">

            {% render(controller('AppBundle:TimeSheet:new')) %}

            </div>
            <div class=\"modal-footer\">

                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
            </div>
        </div>
    </div>
</div>", "::Timesheet/dayclick.html.twig", "/var/www/html/prep/app/Resources/views/Timesheet/dayclick.html.twig");
    }
}
