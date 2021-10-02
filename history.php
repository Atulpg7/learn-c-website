<?php
include("head.php");
if(empty($_SESSION['uname']))
{
    header("location:login.php");
}
?>


<?php  include("navbar.php");?>

<div class="section-heading" style="overflow: auto;height: 500px;"><h1 style="text-align:center;"><b>History Of C Language</b></h1>
<p>
                        C is a general-purpose programming language which features economy of expression, modern 
                        control flow and data structures, and a 
                        rich set of operators. C is not a "very high level" 
                        language, nor a "big" one, and is not specialized to 
                        any particular area of application. But its absence of 
                        restrictions and its generality make it more convenient and 
                        effective for many tasks than supposedly more powerful languages.
</p>
<p>
                        The history of C programming language is 
                        quite interesting. C was originally designed 
                        for and implemented on the UNIX operating system 
                        on the DEC PDP-ll, by Dennis Ritchie. C is the result
                         of a development process that started with an older 
                         language called BCPL. BCPL was developed by Martin 
                         Richards, and it influenced a language called B, which 
                         was invented by Ken Thompson. B led to the development 
                         of C in the 1970s.
                        </p>
                        
                        <p>
                        For many years, the de facto standard for C was 
                        the version supplied with the UNIX operating system. 
                        In the summer of 1983 a committee was established to
                         create an ANSI (American National Standards Institute)
                          standard that would define the C language. The 
                          standardization process took six years (much longer 
                          than anyone reasonably expected).
                        </p>
                        <p>
                        The ANSI C standard was finally adopted in December 1989,
                         with the first copies becoming available in early 1990. 
                         The standard was also adopted by ISO (International Standards 
                         Organization), and the resulting standard was typically 
                         referred to as ANSI/ISO Standard C. In 1995, Amendment 1 
                         to the C standard was adopted, which, among other things, 
                         added several new library functions. The 1989 standard for C, 
                         along with Amendment 1, became a base document for Standard C++,
                          defining the C subset of C++. The version of C defined by the 1989 
                          standard is commonly referred to as C89.			
                        </p>
                        <p>
                        During the 1990s, a new standard for C was being developed. 
                        It was the 1999 standard for C, usually referred to as C99. 
                        In general, C99 retained nearly all of the features of C89. 
                        The C99 standardization committee focused on two main areas: 
                        the addition of several numeric libraries and the development 
                        of some special-use, but highly innovative, new features, such 
                        as variable-length arrays and the <code>restrict</code> pointer
                         qualifier. These innovations have once again put C at the forefront 
                         of computer language development.			
						</p>
</div>

<?php include("footer.php");?>