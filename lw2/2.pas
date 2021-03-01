PROGRAM PrintHello(INPUT, OUTPUT);
USES DOS;
BEGIN {PrintHello}
  WRITELN('Content-Type: text/html');
  WRITELN;
  WRITELN('<h1>OH MY PASCAL</h1>');
  WRITELN('<p> REQUEST_METHOD: ', GetEnv('REQUEST_METHOD'), '</p>');
  WRITELN('<p> QUERY_STRING: ', GetEnv('QUERY_STRING'), '</p>');
  WRITELN('<p> CONTENT_LENGTH: ', GetEnv('CONTENT_LENGTH'), '</p>');
  WRITELN('<p> HTTP_USER_AGENT: ', GetEnv('HTTP_USER_AGENT'), '</p>');
  WRITELN('<p> HTTP_HOST: ', GetEnv('HTTP_HOST'), '</p>');
END. {PrintHello}
