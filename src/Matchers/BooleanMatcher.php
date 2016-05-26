<?php

namespace DeKey\Tester\Matchers;

use PHPUnit_Framework_Assert as Assert;

/**
 * BooleanMatcher is designed to check given boolean variable matches expectation.
 *
 * @package DeKey\Tester\Matchers
 * @author Dmitry Kolodko <dangel@quartsoft.com>
 */
class BooleanMatcher extends ValueMatcher {
    public function isTrue() {
        Assert::assertTrue($this->actual, $this->description);
        return $this;
    }

    public function isFalse() {
        Assert::assertFalse($this->actual, $this->description);
        return $this;
    }
}