RELEASE:= 2.6.6
SED != command -v gsed 2>/dev/null || echo sed

all:
	$(SED) -i'' -e "/fvwm-version:/c\fvwm-version: $(RELEASE)" _config.yml
	wget -O documentation/developers/DEVELOPERS.md \
		https://raw.githubusercontent.com/fvwmorg/fvwm/master/docs/DEVELOPERS.md
	wget -O news/news.md \
		https://raw.githubusercontent.com/fvwmorg/fvwm/master/NEWS