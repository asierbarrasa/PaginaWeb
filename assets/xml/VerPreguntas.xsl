<?xml version="1.0"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <HTML>
            <BODY>
                <TABLE border="1">
                    <THEAD>
                        <TR> <TH>Autor</TH> <TH>Cuerpo</TH><TH>Respuesta Correcta</TH>
                            <TH>Respuetas Incorrectas</TH><TH>Complejidad</TH><TH>Tema</TH> </TR>
                    </THEAD>
                    <xsl:for-each select="/assessmentItems/assessmentItem" >
                        <TR>
                            <TD>
                                <FONT SIZE="2" FACE="Verdana">
                                    <xsl:value-of select="@author"/> <BR/>
                                </FONT>
                            </TD>
                            <TD>
                                <FONT SIZE="2"  FACE="Verdana">
                                    <xsl:value-of select="itemBody/p"/> <BR/>
                                </FONT>
                            </TD>
                            <TD>
                                <FONT SIZE="2"  FACE="Verdana">
                                    <xsl:value-of select="correctResponse/value"/> <BR/>
                                </FONT>
                            </TD>
                            <TD>
                                <FONT SIZE="2"  FACE="Verdana">
                                    <xsl:for-each select="/assessmentItems/assessmentItem/incorrectResponses" >
                                        <UL>
                                            <LI>
                                                <xsl:value-of select="value"/> <BR/>
                                            </LI>
                                        </UL>
                                    </xsl:for-each>
                                </FONT>
                            </TD>
                            <TD>
                                <FONT SIZE="2"  FACE="Verdana">
                                    <xsl:value-of select="@complexity"/> <BR/>
                                </FONT>
                            </TD>
                            <TD>
                                <FONT SIZE="2"  FACE="Verdana">
                                    <xsl:value-of select="@subject"/> <BR/>
                                </FONT>
                            </TD>
                        </TR>
                    </xsl:for-each>
                </TABLE>

            </BODY>
        </HTML>
    </xsl:template>
</xsl:stylesheet>