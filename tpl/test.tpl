{$articleTitle}
{*
    第二波
*}
<br />
{$arr.articleContent.title|capitalize}
{$arr.articleContent.author|cat:' love':'you'}
{$arr.aaa|default:"adsfa"}
<br />
{$time|date_format}
{$time|date_format:"%H:%M:%S"}
{$time|date_format:"%B:%e:%Y"}
<br />
{$articleTitle|lower}
{$articleTitle|upper}
{$happy|nl2br}
<br />
{section name=article loop=$articleList}
    {$articleList[article].title}
    {$articleList[article].author}
    {$articleList[article].content}
    <br />
{/section}
{foreach item=article from=$articleList}
    {$article.title}
    {$article.author}
    {$article.content}
    <br />
    {foreachelse}
    当前没有文章
{/foreach}
<br>
{foreach $articleList as $article}
    {$article.title}
    {$article.author}
    {$article.content}
    <br />
    {foreachelse}
    当前没有文章
{/foreach}
{$myObj->meth1(array('苹果','红了'))}
{include file="header.tpl" sitename="慕课网"}