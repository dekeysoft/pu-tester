<?php //[STAMP] 0b40522bd45ddbff390d13705551372d
namespace _generated;

// This class was automatically generated by build task
// You should not change it manually as it will be overwritten on next build
// @codingStandardsIgnoreFile

trait UnitTesterActions {
    /**
     * @return \Codeception\Scenario
     */
    abstract protected function getScenario();

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that two variables are equal. If you're comparing floating-point values,
     * you can specify the optional "delta" parameter which dictates how great of a precision
     * error are you willing to tolerate in order to consider the two values equal.
     *
     * Regular example:
     * ```php
     * <?php
     * $I->assertEquals($element->getChildrenCount(), 5);
     * ```
     *
     * Floating-point example:
     * ```php
     * <?php
     * $I->assertEquals($calculator->add(0.1, 0.2), 0.3, 'Calculator should add the two numbers correctly.', 0.01);
     * ```
     *
     * @param        $expected
     * @param        $actual
     * @param string $message
     * @param float $delta
     *
     * @see \Codeception\Module\Asserts::assertEquals()
     */
    public function assertEquals($expected, $actual, $message = null, $delta = null) {
        return $this->getScenario()
                    ->runStep(new \Codeception\Step\Action('assertEquals', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that two variables are not equal. If you're comparing floating-point values,
     * you can specify the optional "delta" parameter which dictates how great of a precision
     * error are you willing to tolerate in order to consider the two values not equal.
     *
     * Regular example:
     * ```php
     * <?php
     * $I->assertNotEquals($element->getChildrenCount(), 0);
     * ```
     *
     * Floating-point example:
     * ```php
     * <?php
     * $I->assertNotEquals($calculator->add(0.1, 0.2), 0.4, 'Calculator should add the two numbers correctly.', 0.01);
     * ```
     *
     * @param        $expected
     * @param        $actual
     * @param string $message
     * @param float $delta
     *
     * @see \Codeception\Module\Asserts::assertNotEquals()
     */
    public function assertNotEquals($expected, $actual, $message = null, $delta = null) {
        return $this->getScenario()
                    ->runStep(new \Codeception\Step\Action('assertNotEquals', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that two variables are same
     *
     * @param        $expected
     * @param        $actual
     * @param string $message
     *
     * @see \Codeception\Module\Asserts::assertSame()
     */
    public function assertSame($expected, $actual, $message = null) {
        return $this->getScenario()
                    ->runStep(new \Codeception\Step\Action('assertSame', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that two variables are not same
     *
     * @param        $expected
     * @param        $actual
     * @param string $message
     *
     * @see \Codeception\Module\Asserts::assertNotSame()
     */
    public function assertNotSame($expected, $actual, $message = null) {
        return $this->getScenario()
                    ->runStep(new \Codeception\Step\Action('assertNotSame', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that actual is greater than expected
     *
     * @param        $expected
     * @param        $actual
     * @param string $message
     *
     * @see \Codeception\Module\Asserts::assertGreaterThan()
     */
    public function assertGreaterThan($expected, $actual, $message = null) {
        return $this->getScenario()
                    ->runStep(new \Codeception\Step\Action('assertGreaterThan', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that actual is greater or equal than expected
     *
     * @param        $expected
     * @param        $actual
     * @param string $message
     *
     * @see \Codeception\Module\Asserts::assertGreaterThanOrEqual()
     */
    public function assertGreaterThanOrEqual($expected, $actual, $message = null) {
        return $this->getScenario()
                    ->runStep(new \Codeception\Step\Action('assertGreaterThanOrEqual', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that actual is less than expected
     *
     * @param        $expected
     * @param        $actual
     * @param string $message
     *
     * @see \Codeception\Module\Asserts::assertLessThan()
     */
    public function assertLessThan($expected, $actual, $message = null) {
        return $this->getScenario()
                    ->runStep(new \Codeception\Step\Action('assertLessThan', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that actual is less or equal than expected
     *
     * @param        $expected
     * @param        $actual
     * @param string $message
     *
     * @see \Codeception\Module\Asserts::assertLessThanOrEqual()
     */
    public function assertLessThanOrEqual($expected, $actual, $message = null) {
        return $this->getScenario()
                    ->runStep(new \Codeception\Step\Action('assertLessThanOrEqual', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that haystack contains needle
     *
     * @param        $needle
     * @param        $haystack
     * @param string $message
     *
     * @see \Codeception\Module\Asserts::assertContains()
     */
    public function assertContains($needle, $haystack, $message = null) {
        return $this->getScenario()
                    ->runStep(new \Codeception\Step\Action('assertContains', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that haystack doesn't contain needle.
     *
     * @param        $needle
     * @param        $haystack
     * @param string $message
     *
     * @see \Codeception\Module\Asserts::assertNotContains()
     */
    public function assertNotContains($needle, $haystack, $message = null) {
        return $this->getScenario()
                    ->runStep(new \Codeception\Step\Action('assertNotContains', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that string match with pattern
     *
     * @param string $pattern
     * @param string $string
     * @param string $message
     *
     * @see \Codeception\Module\Asserts::assertRegExp()
     */
    public function assertRegExp($pattern, $string, $message = null) {
        return $this->getScenario()
                    ->runStep(new \Codeception\Step\Action('assertRegExp', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that string not match with pattern
     *
     * @param string $pattern
     * @param string $string
     * @param string $message
     *
     * @see \Codeception\Module\Asserts::assertNotRegExp()
     */
    public function assertNotRegExp($pattern, $string, $message = null) {
        return $this->getScenario()
                    ->runStep(new \Codeception\Step\Action('assertNotRegExp', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that a string starts with the given prefix.
     *
     * @param string $prefix
     * @param string $string
     * @param string $message
     *
     * @see \Codeception\Module\Asserts::assertStringStartsWith()
     */
    public function assertStringStartsWith($prefix, $string, $message = null) {
        return $this->getScenario()
                    ->runStep(new \Codeception\Step\Action('assertStringStartsWith', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that a string doesn't start with the given prefix.
     *
     * @param string $prefix
     * @param string $string
     * @param string $message
     *
     * @see \Codeception\Module\Asserts::assertStringStartsNotWith()
     */
    public function assertStringStartsNotWith($prefix, $string, $message = null) {
        return $this->getScenario()
                    ->runStep(new \Codeception\Step\Action('assertStringStartsNotWith', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that variable is empty.
     *
     * @param        $actual
     * @param string $message
     *
     * @see \Codeception\Module\Asserts::assertEmpty()
     */
    public function assertEmpty($actual, $message = null) {
        return $this->getScenario()
                    ->runStep(new \Codeception\Step\Action('assertEmpty', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that variable is not empty.
     *
     * @param        $actual
     * @param string $message
     *
     * @see \Codeception\Module\Asserts::assertNotEmpty()
     */
    public function assertNotEmpty($actual, $message = null) {
        return $this->getScenario()
                    ->runStep(new \Codeception\Step\Action('assertNotEmpty', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that variable is NULL
     *
     * @param        $actual
     * @param string $message
     *
     * @see \Codeception\Module\Asserts::assertNull()
     */
    public function assertNull($actual, $message = null) {
        return $this->getScenario()
                    ->runStep(new \Codeception\Step\Action('assertNull', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that variable is not NULL
     *
     * @param        $actual
     * @param string $message
     *
     * @see \Codeception\Module\Asserts::assertNotNull()
     */
    public function assertNotNull($actual, $message = null) {
        return $this->getScenario()
                    ->runStep(new \Codeception\Step\Action('assertNotNull', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that condition is positive.
     *
     * @param        $condition
     * @param string $message
     *
     * @see \Codeception\Module\Asserts::assertTrue()
     */
    public function assertTrue($condition, $message = null) {
        return $this->getScenario()
                    ->runStep(new \Codeception\Step\Action('assertTrue', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that condition is negative.
     *
     * @param        $condition
     * @param string $message
     *
     * @see \Codeception\Module\Asserts::assertFalse()
     */
    public function assertFalse($condition, $message = null) {
        return $this->getScenario()
                    ->runStep(new \Codeception\Step\Action('assertFalse', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks if file exists
     *
     * @param string $filename
     * @param string $message
     *
     * @see \Codeception\Module\Asserts::assertFileExists()
     */
    public function assertFileExists($filename, $message = null) {
        return $this->getScenario()
                    ->runStep(new \Codeception\Step\Action('assertFileExists', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks if file doesn't exist
     *
     * @param string $filename
     * @param string $message
     *
     * @see \Codeception\Module\Asserts::assertFileNotExists()
     */
    public function assertFileNotExists($filename, $message = null) {
        return $this->getScenario()
                    ->runStep(new \Codeception\Step\Action('assertFileNotExists', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param $expected
     * @param $actual
     * @param $description
     *
     * @see \Codeception\Module\Asserts::assertGreaterOrEquals()
     */
    public function assertGreaterOrEquals($expected, $actual, $description = null) {
        return $this->getScenario()
                    ->runStep(new \Codeception\Step\Action('assertGreaterOrEquals', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param $expected
     * @param $actual
     * @param $description
     *
     * @see \Codeception\Module\Asserts::assertLessOrEquals()
     */
    public function assertLessOrEquals($expected, $actual, $description = null) {
        return $this->getScenario()
                    ->runStep(new \Codeception\Step\Action('assertLessOrEquals', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param $actual
     * @param $description
     *
     * @see \Codeception\Module\Asserts::assertIsEmpty()
     */
    public function assertIsEmpty($actual, $description = null) {
        return $this->getScenario()
                    ->runStep(new \Codeception\Step\Action('assertIsEmpty', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param $key
     * @param $actual
     * @param $description
     *
     * @see \Codeception\Module\Asserts::assertArrayHasKey()
     */
    public function assertArrayHasKey($key, $actual, $description = null) {
        return $this->getScenario()
                    ->runStep(new \Codeception\Step\Action('assertArrayHasKey', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param $key
     * @param $actual
     * @param $description
     *
     * @see \Codeception\Module\Asserts::assertArrayNotHasKey()
     */
    public function assertArrayNotHasKey($key, $actual, $description = null) {
        return $this->getScenario()
                    ->runStep(new \Codeception\Step\Action('assertArrayNotHasKey', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that array contains subset.
     *
     * @param array $subset
     * @param array $array
     * @param bool $strict
     * @param string $message
     *
     * @see \Codeception\Module\Asserts::assertArraySubset()
     */
    public function assertArraySubset($subset, $array, $strict = null, $message = null) {
        return $this->getScenario()
                    ->runStep(new \Codeception\Step\Action('assertArraySubset', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param $expectedCount
     * @param $actual
     * @param $description
     *
     * @see \Codeception\Module\Asserts::assertCount()
     */
    public function assertCount($expectedCount, $actual, $description = null) {
        return $this->getScenario()
                    ->runStep(new \Codeception\Step\Action('assertCount', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param $class
     * @param $actual
     * @param $description
     *
     * @see \Codeception\Module\Asserts::assertInstanceOf()
     */
    public function assertInstanceOf($class, $actual, $description = null) {
        return $this->getScenario()
                    ->runStep(new \Codeception\Step\Action('assertInstanceOf', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param $class
     * @param $actual
     * @param $description
     *
     * @see \Codeception\Module\Asserts::assertNotInstanceOf()
     */
    public function assertNotInstanceOf($class, $actual, $description = null) {
        return $this->getScenario()
                    ->runStep(new \Codeception\Step\Action('assertNotInstanceOf', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param $type
     * @param $actual
     * @param $description
     *
     * @see \Codeception\Module\Asserts::assertInternalType()
     */
    public function assertInternalType($type, $actual, $description = null) {
        return $this->getScenario()
                    ->runStep(new \Codeception\Step\Action('assertInternalType', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Fails the test with message.
     *
     * @param $message
     *
     * @see \Codeception\Module\Asserts::fail()
     */
    public function fail($message) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('fail', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Handles and checks exception called inside callback function.
     * Either exception class name or exception instance should be provided.
     *
     * ```php
     * <?php
     * $I->expectException(MyException::class, function() {
     *     $this->doSomethingBad();
     * });
     *
     * $I->expectException(new MyException(), function() {
     *     $this->doSomethingBad();
     * });
     * ```
     * If you want to check message or exception code, you can pass them with exception instance:
     * ```php
     * <?php
     * // will check that exception MyException is thrown with "Don't do bad things" message
     * $I->expectException(new MyException("Don't do bad things"), function() {
     *     $this->doSomethingBad();
     * });
     * ```
     *
     * @param $exception string or \Exception
     * @param $callback
     *
     * @see \Codeception\Module\Asserts::expectException()
     */
    public function expectException($exception, $callback) {
        return $this->getScenario()
                    ->runStep(new \Codeception\Step\Action('expectException', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Specifies scenario test guy is working on.
     *
     * @param string $scenario scenario name.
     * Scenario should be a logical ending of "I describe ". For example: "process of user registration".
     * Such scenario would result in "I describe process of user registration" output in console.
     *
     * @return $this
     * @see \PHPKitchen\CodeSpecs\Integration\Codeception\CodeSpecs::describe()
     */
    public function describe($scenario) {
        return $this->getScenario()
                    ->runStep(new \Codeception\Step\Action('describe', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Specifies what test guy expects from a set of matchers that would be defined next in the
     * specification.
     *
     * @param string $expectation expectation text.
     * Expectation should be a logical ending of "I expect that ". For example: "user is added to the DB".
     * Such scenario would result in "I expect that user is added to the DB" output in console.
     *
     * @return $this
     * @see \PHPKitchen\CodeSpecs\Integration\Codeception\CodeSpecs::expectThat()
     */
    public function expectThat($expectation) {
        return $this->getScenario()
                    ->runStep(new \Codeception\Step\Action('expectThat', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Specifies what test guy expects from a set of matchers that would be defined next in the
     * specification.
     *
     * @param string $expectation expectation text.
     * Expectation should be a logical ending of "I expect to ". For example: "see user in the DB".
     * Such scenario would result in "I expect to see user in the DB" output in console.
     * @param callable $verificationSteps callable function with following definition "function (TestGuy $I) { ..." that contains a group of
     * expectations united by one verification topic. All of the expectations would be executed once they
     * are defined.
     *
     * @return $this
     * @see \PHPKitchen\CodeSpecs\Integration\Codeception\CodeSpecs::verifyThat()
     */
    public function verifyThat($expectation, $verificationSteps = null) {
        return $this->getScenario()
                    ->runStep(new \Codeception\Step\Action('verifyThat', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Specifies name of a variable test guy would check.
     *
     * @param string $variableName name of a variable to look at.
     *
     * @return TestGuy
     * @see \PHPKitchen\CodeSpecs\Integration\Codeception\CodeSpecs::lookAt()
     */
    public function lookAt($variableName) {
        return $this->getScenario()
                    ->runStep(new \Codeception\Step\Action('lookAt', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Creates runtime matcher that you can use to perform typical asserts.
     * Runtime matcher is an object that represents a set of asserts from a typical matcher that
     * aren't executed at a time they were defined but would be executed every time runtime matcher object
     * would be called as a function with one argument - value to assert.
     *
     * For example:
     * <code>
     *  $userHasName = $I->match('user')->isArray()->isNotEmpty()->hasKey('name');
     *  $userHasName($admin);
     *  $userHasName($member);
     * </code>
     *
     * @param string $variableName name of a variable to look at.
     *
     * @return \PHPKitchen\CodeSpecs\Expectation\Dispatcher\DelayedDispatcher
     * @see \PHPKitchen\CodeSpecs\Integration\Codeception\CodeSpecs::match()
     */
    public function match($variableName) {
        return $this->getScenario()
                    ->runStep(new \Codeception\Step\Action('match', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Stops execution for specified number of units of time.
     *
     * @param int $numberOfTimeUnits number of units of time.
     * {@link Wait} specifies what unit should be used.
     *
     * @return Wait
     * @see \PHPKitchen\CodeSpecs\Integration\Codeception\CodeSpecs::wait()
     */
    public function wait($numberOfTimeUnits) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('wait', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Starts a chain of asserts from {@link ValueMatcher}.
     *
     * @param mixed $variable variable to be tested
     *
     * @return \PHPKitchen\CodeSpecs\Expectation\Matcher\ValueMatcher
     * Conditional Assertion: Test won't be stopped on fail
     * @see \PHPKitchen\CodeSpecs\Integration\Codeception\CodeSpecs::see()
     */
    public function canSee($variable) {
        return $this->getScenario()
                    ->runStep(new \Codeception\Step\ConditionalAssertion('see', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Starts a chain of asserts from {@link ValueMatcher}.
     *
     * @param mixed $variable variable to be tested
     *
     * @return \PHPKitchen\CodeSpecs\Expectation\Matcher\ValueMatcher
     * @see \PHPKitchen\CodeSpecs\Integration\Codeception\CodeSpecs::see()
     */
    public function see($variable) {
        return $this->getScenario()
                    ->runStep(new \Codeception\Step\Assertion('see', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Starts a chain of asserts from {@link StringMatcher}.
     *
     * @param string $variable variable to be tested
     *
     * @return \PHPKitchen\CodeSpecs\Expectation\Matcher\StringMatcher
     * Conditional Assertion: Test won't be stopped on fail
     * @see \PHPKitchen\CodeSpecs\Integration\Codeception\CodeSpecs::seeString()
     */
    public function canSeeString($string) {
        return $this->getScenario()
                    ->runStep(new \Codeception\Step\ConditionalAssertion('seeString', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Starts a chain of asserts from {@link StringMatcher}.
     *
     * @param string $variable variable to be tested
     *
     * @return \PHPKitchen\CodeSpecs\Expectation\Matcher\StringMatcher
     * @see \PHPKitchen\CodeSpecs\Integration\Codeception\CodeSpecs::seeString()
     */
    public function seeString($string) {
        return $this->getScenario()
                    ->runStep(new \Codeception\Step\Assertion('seeString', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Starts a chain of asserts from {@link ArrayMatcher}.
     *
     * @param array|\ArrayAccess $variable variable to be tested
     *
     * @return \PHPKitchen\CodeSpecs\Expectation\Matcher\ArrayMatcher
     * Conditional Assertion: Test won't be stopped on fail
     * @see \PHPKitchen\CodeSpecs\Integration\Codeception\CodeSpecs::seeArray()
     */
    public function canSeeArray($variable) {
        return $this->getScenario()
                    ->runStep(new \Codeception\Step\ConditionalAssertion('seeArray', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Starts a chain of asserts from {@link ArrayMatcher}.
     *
     * @param array|\ArrayAccess $variable variable to be tested
     *
     * @return \PHPKitchen\CodeSpecs\Expectation\Matcher\ArrayMatcher
     * @see \PHPKitchen\CodeSpecs\Integration\Codeception\CodeSpecs::seeArray()
     */
    public function seeArray($variable) {
        return $this->getScenario()
                    ->runStep(new \Codeception\Step\Assertion('seeArray', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Starts a chain of asserts from {@link BooleanMatcher}.
     *
     * @param boolean $variable variable to be tested
     *
     * @return \PHPKitchen\CodeSpecs\Expectation\Matcher\BooleanMatcher
     * Conditional Assertion: Test won't be stopped on fail
     * @see \PHPKitchen\CodeSpecs\Integration\Codeception\CodeSpecs::seeBool()
     */
    public function canSeeBool($variable) {
        return $this->getScenario()
                    ->runStep(new \Codeception\Step\ConditionalAssertion('seeBool', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Starts a chain of asserts from {@link BooleanMatcher}.
     *
     * @param boolean $variable variable to be tested
     *
     * @return \PHPKitchen\CodeSpecs\Expectation\Matcher\BooleanMatcher
     * @see \PHPKitchen\CodeSpecs\Integration\Codeception\CodeSpecs::seeBool()
     */
    public function seeBool($variable) {
        return $this->getScenario()
                    ->runStep(new \Codeception\Step\Assertion('seeBool', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Starts a chain of asserts from {@link NumberMatcher}.
     *
     * @param int|float $variable variable to be tested
     *
     * @return \PHPKitchen\CodeSpecs\Expectation\Matcher\NumberMatcher
     * Conditional Assertion: Test won't be stopped on fail
     * @see \PHPKitchen\CodeSpecs\Integration\Codeception\CodeSpecs::seeNumber()
     */
    public function canSeeNumber($variable) {
        return $this->getScenario()
                    ->runStep(new \Codeception\Step\ConditionalAssertion('seeNumber', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Starts a chain of asserts from {@link NumberMatcher}.
     *
     * @param int|float $variable variable to be tested
     *
     * @return \PHPKitchen\CodeSpecs\Expectation\Matcher\NumberMatcher
     * @see \PHPKitchen\CodeSpecs\Integration\Codeception\CodeSpecs::seeNumber()
     */
    public function seeNumber($variable) {
        return $this->getScenario()
                    ->runStep(new \Codeception\Step\Assertion('seeNumber', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Starts a chain of asserts from {@link ObjectMatcher}.
     *
     * @param object $variable variable to be tested
     *
     * @return \PHPKitchen\CodeSpecs\Expectation\Matcher\ObjectMatcher
     * Conditional Assertion: Test won't be stopped on fail
     * @see \PHPKitchen\CodeSpecs\Integration\Codeception\CodeSpecs::seeObject()
     */
    public function canSeeObject($variable) {
        return $this->getScenario()
                    ->runStep(new \Codeception\Step\ConditionalAssertion('seeObject', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Starts a chain of asserts from {@link ObjectMatcher}.
     *
     * @param object $variable variable to be tested
     *
     * @return \PHPKitchen\CodeSpecs\Expectation\Matcher\ObjectMatcher
     * @see \PHPKitchen\CodeSpecs\Integration\Codeception\CodeSpecs::seeObject()
     */
    public function seeObject($variable) {
        return $this->getScenario()
                    ->runStep(new \Codeception\Step\Assertion('seeObject', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Starts a chain of asserts from {@link ClassMatcher}.
     *
     * @param string $variable variable to be tested
     *
     * @return \PHPKitchen\CodeSpecs\Expectation\Matcher\ClassMatcher
     * Conditional Assertion: Test won't be stopped on fail
     * @see \PHPKitchen\CodeSpecs\Integration\Codeception\CodeSpecs::seeClass()
     */
    public function canSeeClass($variable) {
        return $this->getScenario()
                    ->runStep(new \Codeception\Step\ConditionalAssertion('seeClass', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Starts a chain of asserts from {@link ClassMatcher}.
     *
     * @param string $variable variable to be tested
     *
     * @return \PHPKitchen\CodeSpecs\Expectation\Matcher\ClassMatcher
     * @see \PHPKitchen\CodeSpecs\Integration\Codeception\CodeSpecs::seeClass()
     */
    public function seeClass($variable) {
        return $this->getScenario()
                    ->runStep(new \Codeception\Step\Assertion('seeClass', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Starts a chain of asserts from {@link FileMatcher}.
     *
     * @param string $variable variable to be tested
     *
     * @return \PHPKitchen\CodeSpecs\Expectation\Matcher\FileMatcher
     * Conditional Assertion: Test won't be stopped on fail
     * @see \PHPKitchen\CodeSpecs\Integration\Codeception\CodeSpecs::seeFile()
     */
    public function canSeeFile($variable) {
        return $this->getScenario()
                    ->runStep(new \Codeception\Step\ConditionalAssertion('seeFile', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Starts a chain of asserts from {@link FileMatcher}.
     *
     * @param string $variable variable to be tested
     *
     * @return \PHPKitchen\CodeSpecs\Expectation\Matcher\FileMatcher
     * @see \PHPKitchen\CodeSpecs\Integration\Codeception\CodeSpecs::seeFile()
     */
    public function seeFile($variable) {
        return $this->getScenario()
                    ->runStep(new \Codeception\Step\Assertion('seeFile', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Starts a chain of asserts from {@link DirectoryMatcher}.
     *
     * @param string $variable variable to be tested
     *
     * @return \PHPKitchen\CodeSpecs\Expectation\Matcher\DirectoryMatcher
     * Conditional Assertion: Test won't be stopped on fail
     * @see \PHPKitchen\CodeSpecs\Integration\Codeception\CodeSpecs::seeDirectory()
     */
    public function canSeeDirectory($variable) {
        return $this->getScenario()
                    ->runStep(new \Codeception\Step\ConditionalAssertion('seeDirectory', func_get_args()));
    }

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Starts a chain of asserts from {@link DirectoryMatcher}.
     *
     * @param string $variable variable to be tested
     *
     * @return \PHPKitchen\CodeSpecs\Expectation\Matcher\DirectoryMatcher
     * @see \PHPKitchen\CodeSpecs\Integration\Codeception\CodeSpecs::seeDirectory()
     */
    public function seeDirectory($variable) {
        return $this->getScenario()
                    ->runStep(new \Codeception\Step\Assertion('seeDirectory', func_get_args()));
    }
}
