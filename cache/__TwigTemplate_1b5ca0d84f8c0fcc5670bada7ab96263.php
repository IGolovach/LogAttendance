<?php

/* students/login.html */
class __TwigTemplate_1b5ca0d84f8c0fcc5670bada7ab96263 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'headcss' => array($this, 'block_headcss'),
            'headjavascript' => array($this, 'block_headjavascript'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    public function getParent(array $context)
    {
        if (null === $this->parent) {
            $this->parent = $this->env->loadTemplate("students/students-base.html");
        }

        return $this->parent;
    }

    public function display(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_headcss($context, array $blocks = array())
    {
        // line 4
        $this->getParentBlock("headcss", $context, $blocks);
    }

    // line 6
    public function block_headjavascript($context, array $blocks = array())
    {
    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        echo "<table background=\"images/37.jpg\"  width=100% >
<tr>
<td valign=\"bottom\"><p><a href=\"http://www.kpispu.info\"><img src=\"images/spu.png\" alt=\"\" height=\"90\"></a></p></td>
<td width=20% ></td>
<td><img src=\"images/main_text.png\" alt=\"\" height=\"80\"></td>
<td width=\"300px\">
<div style=\"text-align: right;\">
  <div style=\"display: inline-block;\"><br><font color=\"#00008B\" face=\"Century Gothic\">
  <strong><i>
  <script language=\"javascript\" type=\"text/javascript\"><!--
var d = new Date();

var day=new Array(\"Воскресенье\",\"Понедельник\",\"Вторник\",
\"Среда\",\"Четверг\",\"Пятница\",\"Суббота\");

var month=new Array(\"января\",\"февраля\",\"марта\",\"апреля\",\"мая\",\"июня\",
\"июля\",\"августа\",\"сентября\",\"октября\",\"ноября\",\"декабря\");

document.write(day[d.getDay()]+\" \" +d.getDate()+ \" \" + month[d.getMonth()]
+ \" \" + d.getFullYear() + \" г.\");
//--></script></i>
</strong></font>
</div></div></td>
</tr>
</table>
";
    }

    // line 34
    public function block_content($context, array $blocks = array())
    {
        echo "<div align=\"center\">
<span class=\"loginerr\">";
        // line 36
        echo (isset($context['loginError']) ? $context['loginError'] : null);
        echo "</span>
<form action=\"login.php\" method=\"post\">
<input type=\"hidden\" name=\"action\" value=\"login\" />
  <table id=\"rounded-corner\" style=\"width:auto\">
  <!--thead-->
    <tr>
      <th class=\"rounded-left\">&nbsp;</th>
      <th colspan=\"2\">Авторизация родителей</th>
      <th class=\"rounded-right\">&nbsp;</th>
    </tr>
  <!--/thead-->
  <tbody>
  \t<tr>
    \t<td>&nbsp;</td>
    \t<td>ПИН код:</td>
    \t<td><input type=\"password\" name=\"pin_code\" /></td>
    \t<td>&nbsp;</td>
  \t</tr>
  </tbody>
  <!--tfoot-->
    <tr>
      <td class=\"rounded-foot-left\">&nbsp;</td>
      <td colspan=\"2\" align=\"center\"><input type=\"submit\" class=\"button\" value=\"Войти\" /></td>
      <td class=\"rounded-foot-right\">&nbsp;</td>
    </tr>
  <!--/tfoot-->
  </table>
</form>
</div>
";
    }

    // line 66
    public function block_footer($context, array $blocks = array())
    {
    }

}
