import { Box, HorizontalStack, Text, VerticalStack } from '@shopify/polaris/build/ts/src';
import React from 'react'

const BoxLogo = () => {
  return (
    <div>
      {" "}
      <Box
        paddingBlockStart={{ xs: "10", sm: "5" }}
        paddingBlockEnd={{ xs: "0", sm: "0" }}
        paddingInlineStart={{ xl: "8", lg: "8", sm: "0", xs: "4", md: "0" }}
        paddingInlineEnd={{ xl: "8", lg: "8", xs: "4", sm: "0", md: "0" }}
      >
        <VerticalStack gap={"4"}>
          {true && (
            <HorizontalStack blockAlign="center" gap="4">
              {"logocarena"}
              <Text as="h1" variant="headingLg">
                Carena <br /> Cosmetics
              </Text>
            </HorizontalStack>
          )}
        </VerticalStack>
      </Box>
    </div>
  );
}

export default BoxLogo