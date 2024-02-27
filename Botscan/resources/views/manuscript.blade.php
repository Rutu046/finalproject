<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manuscript Preperation</title>
    <link rel="stylesheet" href="{{Asset("css/manuscript.css")}}">
</head>

<body>

    @extends('layout.header')
    @section('webcontent')
 <div class="manuscript">
    <div class="manuprep">
        <h2>Manuscript Preperation</h2>
        <p>Authors are encouraged to download the BotScan Journal. When preparing their manuscript. In the case of
            traditional submissions, the manuscript should be double-spaced and in Times New Roman, 10 pt with a 3-cm
            margin around a standard A4 page (12 - 18 pages). Manuscripts should be arranged as follows:</p>
    </div>

    <div class="MP">
        <h5>1. Highlights</h5>
        <p>Your highlights are the first thing about your paper that anyone online will read. Use the highlights to tell
            that potential reader what's so great about your paper and why they want to read it. Highlights are three to
            five bullet points that capture the novel results of your research as well as new methods that were used
            during the study (if any). Highlights are meant to be short: 85 characters or fewer, including spaces.
            Highlights have been proven to widen the reach of your work and help to ensure that your article is brought
            to the community of interested colleagues.</p>
    </div>
    <div class="MP">
        <h5>2. Graphical</h5>
        <p>A graphical abstract is a single, concise, pictorial, and visual summary of the main findings of the article.
            This could either be the concluding figure from the article or a figure that is specially designed for the
            purpose, which captures the content of the article for readers at a single glance.<br><br>
            1. Image size: Please provide an image with a minimum of 531 x 1328 pixels (hxw) using a minimum resolution
            of 300 dpi. If you are submitting a larger image, then please use the same ratio (200 high x 500 wide).<br>
            2. File type: preferred file types are TIFF, EPS, PNG, JPEG<br>
            3. No additional text, outline or synopsis should be included. Any text or label must be part of the image
            file.

        </p>
    </div>
    <div class="MP">
        <h5>3. Consent To Publish And Copyright Transfer</h5>
        <p>This document represents an agreement between Author and BotScan. Journal requires authors to transfer the
            copyright prior to publication. This permits TiS to reproduce, publish, distribute and archive the article
            in print and electronic form and to defend against improper use of the article. By signing the Copyright
            Transfer Statement you still retain substantial rights, such as self-archiving.</p>
    </div>
    <div class="MP">
        <h5>4. Title Page</h5>
        <p>The title page should include:<br><br>
            1. A concise and informative title.<br>
            2. Authors' names.<br>
            3. Names and addresses of the institution of the author.<br>
            4. A running title (an abbreviated form of the title) not longer than 40 letters and spaces.<br>
            5. E-mail address of the corresponding author.<br>
        </p>
    </div>

    <div class="MP">
        <h5>5. Abstract</h5>
        <p>The abstract must be no more than 350 words and should be concise and include only the most important aspects
            of the study. The abstract should be a single paragraph and should follow the style of structured abstracts,
            but without headings:<br><br> 1) Introduction: Place the question addressed in a broad context and highlight the
            purpose of the study; <br>2) Materials and methods: Describe briefly the main methods or treatments applied.
            Include any relevant preregistration numbers, and species and strains of any animals used. <br>3) Results
            and
            discussion: Summarize the article's main findings &disscus the result; and <br>4) Conclusions: Indicate the
            main
            conclusions or interpretations. The abstract should be an objective representation of the article: it must
            not contain results which are not presented and substantiated in the main text and should not exaggerate the
            main conclusions.</p>
    </div>

    <div class="MP">
        <h5>6. Keywords</h5>
        <p>Five to ten keywords should be given below the abstract.
            We recommend that the keywords are specific to the article, yet reasonably common within the subject
            discipline.
        </p>
    </div>

    <div class="MP">
        <h5>7. Text</h5>
        <p>The text should be subdivided into Introduction, Materials and methods, Results and discussion, and
            Conclusions. General points for authors to consider include:<br><br>
            1. Please ensure that your manuscript has been spell-checked and grammar-checked before submission to remove
            trivial errors.<br>
            2. Papers should be written in either American or British English but must be consistent throughout the
            paper-do not use both in the same paper.<br>
            3. Abbreviations and acronyms should be used sparingly and consistently. When they first appear in the text,
            the complete term should be given, e.g. DMF = dimethylformamide.<br>
            4. Use only symbol and normal text character sets when inserting Greek letters (a), German umlauts (ä),
            accents (é) etc.<br>
            5. All scientific units must be preceded by a space, for example: ‘... for 2.5 h at 50 °C’ not ‘... for 2.5h
            at 50°C'.<br>
            6. Use tab stops for indents not the space bar.<br>
            7. Use the table function and not spreadsheets to create tables.<br>
            8. Use the equation editor or an equivalent for equations. For authors using Word 2007 or later use the
            Microsoft equation editor rather than the default editor.
        </p>
    </div>

    <div class="MP">
        <h5>8. Acknowledgements</h5>
        <p>Acknowledgements of people, grants, funds etc should be included in a section just before the references. The
            names of funding agencies, scholarships etc should be written in full.</p>
    </div>

    <div class="MP">
        <h5>9. References</h5>
        <p>References in the text should be cited in the manuscript by Arabic numerals in square brackets and numbered
            sequentially in order of citation. They should, if applicable, be before punctuation (example: text [1,2].).
            If multiple citations are used they should appear as follows: [1-3]. Proper abbreviations for all journals
            must be used. For a complete listing of the standard abbreviations of a journal's name please see:
            http://library.caltech.edu/reference/abbreviations</p>
    </div>

  
</div>

    @endsection
</body>

</html>