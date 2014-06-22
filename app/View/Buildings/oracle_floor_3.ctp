<div>
<center>
<img src="img/soap.jpg"  height="150" width="400">
</center>
<p>

<b>SOAP</b>, originally defined as Simple Object Access Protocol, is a protocol specification for exchanging structured information in the implementation of web services in computer networks. It relies on XML Information Set for its message format, and usually relies on other application layer protocols, most notably Hypertext Transfer Protocol (HTTP) or Simple Mail Transfer Protocol (SMTP), for message negotiation and transmission.</br>
</br>
SOAP can form the foundation layer of a web services protocol stack, providing a basic messaging framework upon which web services can be built. This XML-based protocol consists of three parts: an envelope, which defines what is in the message and how to process it, a set of encoding rules for expressing instances of application-defined datatypes, and a convention for representing procedure calls and responses. SOAP has three major characteristics: extensibility (security and WS-routing are among the extensions under development), neutrality (SOAP can be used over any transport protocol such as HTTP, SMTP, TCP, UDP, or JMS), and independence (SOAP allows for any programming model).</br>
</br>
As an example of how SOAP procedures can be used, a SOAP message could be sent to a web site that has web services enabled, such as a real-estate price database, with the parameters needed for a search. The site would then return an XML-formatted document with the resulting data, e.g., prices, location, features. With the data being returned in a standardized machine-parsable format, it can then be integrated directly into a third-party web site or application.

</p>
<a href="http://profs.info.uaic.ro/~busaco/teach/courses/web/presentations/web10ServiciiWeb-SOA-SOAP-WSDL-UDDI.pdf"> More information </a>

<div align="center">
<button onclick="window.location.href='<?php echo Router::url(array('controller'=>'buildings', 'action'=>'quiz_oracle_3'))?>'">Go Test</button>
</div>


</div>